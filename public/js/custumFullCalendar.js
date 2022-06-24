$(document).ready(function () {
    let bt_eventos = document.querySelector('.bt-eventos');
    let bt_tarefa = document.querySelector('.bt-tarefa');
    let bt_lembrete = document.querySelector('.bt-lembrete');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    
    $("#example").datepicker();

    $('.pesquisar-text-header').hide();
    $('.fc-header').remove()
    $('.component_datas').show();
    $('.pesquisar_pessoas').hide();
    $(".modal-micro").draggable();


    $(document).on('click', '.buscar_pessoas_agenda', function (event) {
        toggle_elementos_no_header()
        $('#pesquisar_header_input').focus();
    })

    $('.fechar-modal-micro').click(function () {
        $('.modal-micro').fadeOut('slow');
    })


    $('.preprend-pesquisar').click(function () {
        $('.submenu-pesquisar-principal').toggle('slow')

    })

    $(document).on('click', '.no-hidden', function (event) {
        toggle_elementos_no_header()
    })

    $('.div-interrogacao').click(function () {
        $('.submenu-interrogacao').toggle('fast')
        $('.select_options_de_datas').hide('fast');
        $('.submenu-icon-config').hide('fast')
    })

    $('.config-icon-menu').click(function () {
        $('.submenu-interrogacao').hide('fast')
        $('.select_options_de_datas').hide('fast');
        $('.submenu-icon-config').toggle('fast')
    })

    $('.botao-header-datas').click(function () {
        $('.select_options_de_datas').toggle('fast');
        $('.submenu-interrogacao').hide();
        $('.submenu-icon-config').hide()
    })


    $('.icons-menu-bottom').click(function () {
        $('.sider-bar').toggle();
        $('.fc-daygrid-bod').css('width', '100%');
        $('#calendar').addClass('col-10');
        $('#calendar').removeClass('col-12');
        $('#calendar').css('width', '83%');
        if ($('.sider-bar').css('display') == 'none') {
            $('#calendar').css('width', '100%');
            $('#calendar').addClass('col-12');
            $('.fc-col-header').css('width', '100%');
            $('.fc-daygrid-body').css('width', '100%');
            $('.fc-scrollgrid-sync-table').css('width', '100%');
        }
        calendar.render();
    })

    $('.component_datas').click(function () {
        $('.select_options_de_datas').hide('fast');
    })

    function show(elemento) {
        $('.select_options_de_datas').hide();
        $('.submenu-interrogacao').hide();
        $('.submenu-icon-config').hide()
    }


    $('.bt-criar-evento').click(function () {
        $('.div-criar-evento').toggle('fast');
    })

    $('#minhasAgendaLinks').click(function () {
        $('.opcoesMinhasAgendas').toggle('fast');
    })

    $('#OutrasAgendas').click(function () {
        $('.opcoesOutrasAgendas').toggle('fast');
    })

    $('.bt-close-modal').click(function () {
        $('.modal').modal('hide');
    })



    $('.abaEventos').hide()
    $('.abaTarefas').hide()
    $('.abaLembrete').hide()

    bt_eventos.addEventListener('click', () => {
        abaModal('eventos')
    })

    bt_tarefa.addEventListener('click', () => {
        abaModal('tarefas')
    })

    bt_lembrete.addEventListener('click', () => {
        abaModal('lembrete')
    });


    $('#bt-evento-side-bar').click(function () {
        $('.modal-micro').fadeIn('slow')
        abaModal('eventos')
        $('.div-criar-evento').fadeOut()

    })

})


document.addEventListener('DOMContentLoaded', function () {

    function create(){
        $.ajax({
            url: 'api/events/create',
            method: "POST",
            data: { title: $('#title').val(), start: $('#start-evento').val(), end: $('#end').val() },
            success: function (data) {                
                calendar.refetchEvents
                swal(data);
            }
        })
    }


    function update(id){
        $.ajax({
            url: 'api/events/update',
            method: "POST",
            data: { title: title, start: start, end: end, id:id },
            success: function (data) {                
                calendar.fullCalendar('refetchEvents')
                swal(data);
            }
        })
    }


    function destroy(id){
        $.ajax({
            url: 'api/events/destroy/'+id,
            method: "DELETE",         
            success: function (data) {                
                calendar.refetchEvents
                swal(data);
            }
        })
    }


    
    $('.salvar_form').click(function () {
        let start  = $('#start-evento').val();
        let end  = $('#end').val();
        if($('#hora_inicio_evento').val() != '' || $('#hora_fim').val() != ''){
            let hora_inicio = $('#hora_inicio_evento').val()
            let hora_fim = $('#hora_fim_evento').val();
              start = $('#start-evento').val()+' '+hora_inicio;
              end = $('#start-evento').val()+' '+hora_fim;
        }

        $.ajax({
            url: 'api/events/create',
            method: "POST",
            data: { title: $('#title').val(), start: start, end:end },
            success: function (response) {                       
                calendar.refetchEvents()
                swal(response);
                $('.modal-micro').hide()
            },
            error:function(error){
                console.log(error)           
            }
        })

    })



    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        editable: true,
        height: 900,
        lang: 'pt-br',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth, month'
        },
        //initialDate: new date('Y-d-m'),
        locale: 'pt-br',

        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
      
        selectable: true,
        events: "api/events",
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {           
            var title = $('#title').val()
            var start_date = moment(start.startStr).format('YYYY-MM-DD');       
            var end_date = moment(end).format('YYYY-MM-DD');           
            $('#start-evento').val(start_date)
            $('.modal-micro').show()
            abaModal('eventos')           
        },
        editable: true,
        eventResize: function(event, delta) {     
            data = {
                title:title,
                start:start,
                end:end,
                id:id,
                type:'update'
            }      
        },      
        eventDrop: function(event){
            console.log(event)
            newDate = event.event._instance.range
            var start = moment(newDate.start, "DD-MM-YYYY").add(1, 'days');
          
            var start_date = moment(start).format('YYYY-MM-DD');
            var end_date = moment(newDate.end).format('YYYY-MM-DD');
            console.log(start_date)
            data = event.event._def
            id = data.publicId
            title = data.title
            $.ajax({
                url: 'api/events/update/'+id,
                method: "patch",
                data:{start:start_date, end:end_date, title:title},         
                success: function (data) {   
                
                    swal(data);
                    calendar.refetchEvents()
                   
                }
                   
            })
            

        },
        eventClick:((event)=>{     

            data = event.event._def
            id = data.publicId
            if(confirm('Você realmente deseja excluir?')){
            $.ajax({
                url: 'api/events/destroy/'+id,
                method: "delete",                   
                success: function (data) {  
                    swal(data);
                    calendar.refetchEvents()
                   
                }           
            })
        }
    })
    // selectAllow: function(event)
    // {
    //     // return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1,'second').utcOffset(false), 'day');
    // }
        
    });
   
    calendar.render();
    $('.fs-event').css('font-size','5px');
    $('#betModal').on("hidden.bs.modal", function(){
        $('#saveBtn').unbind();
    })
   


    $('.fc-header-toolbar').hide();
    mudarNomesDiasThCalendario()
    $('.data-header').text($('.fc-toolbar-title').text())


    document.getElementById('my-today-button').addEventListener('click', function () {
        calendar.today();
        calendar2.today();
        $('.data-header').text($('.fc-toolbar-title').text())
    });


    document.getElementById('dia').addEventListener('click', function () {
        calendar.changeView('timeGridDay');

    });

    document.getElementById('semana').addEventListener('click', function () {
        calendar.changeView('timeGridWeek');


    });

    document.getElementById('mes').addEventListener('click', function () {
        calendar.changeView('dayGridMonth');

    });

    document.getElementById('ano').addEventListener('click', function () {
        calendar.changeView('yearGridMonth');

    });



    document.getElementById('next').addEventListener('click', function () {
        calendar.next();
        $('.data-header').text(calendar.currentData.viewTitle)

    });

    document.getElementById('prev').addEventListener('click', function () {
        calendar.prev();
        $('.data-header').text(calendar.currentData.viewTitle)

    });

    function mudarNomesDiasThCalendario() {
        $(diasCalendario1('sun')).text('Dom')
        $(diasCalendario1('mon')).text('Seg')
        $(diasCalendario1('tue')).text('Ter')
        $(diasCalendario1('wed')).text('Qua')
        $(diasCalendario1('thu')).text('Qui')
        $(diasCalendario1('fri')).text('Sex')
        $(diasCalendario1('sat')).text('Sab')
        $(diasCalendario2('sun')).text('D')
        $(diasCalendario2('mon')).text('S')
        $(diasCalendario2('tue')).text('T')
        $(diasCalendario2('wed')).text('Q')
        $(diasCalendario2('thu')).text('Q')
        $(diasCalendario2('fri')).text('S')
        $(diasCalendario2('sat')).text('S')
    }

});

function abaModal(aba) {
    switch (aba) {
        case 'eventos':
            $('.abaEventos').show()
            $('.abaTarefas').hide()
            $('.abaLembrete').hide()
            break;

        case 'tarefas':
            $('.abaEventos').hide()
            $('.abaTarefas').show()
            $('.abaLembrete').hide()
            break;


        case 'lembrete':
            $('.abaEventos').hide()
            $('.abaTarefas').hide()
            $('.abaLembrete').show()
            break;

        default:

    }
}



var calendarE2 = document.getElementById('calendario2');
var calendar2 = new FullCalendar.Calendar(calendarE2, {
    aspectRatio: 20,
    editable: true,
    isRTL: false,

    lang: 'pt-br',
    headerToolbar: {
        left: 'prev,next today',
        center: '',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    locale: 'pt-br',
    navLinks: false, // can click day/week names to navigate views
    businessHours: false, // display business hours
    editable: true,
    selectable: true,
    events: [],
    selectable: true,
    selectHelper: true,
    select: function (start, end, allDay) {
        
    }
});

calendar2.render()
calendar2.setOption('contentWidth', 200);


$('.data_calendario2').text(calendar2.currentData.viewTitle)
$('.fc-scroller').css('overflow', 'hidden')

document.getElementById('prev-calendario2').addEventListener('click', function () {
    calendar2.prev();
    $('.data_calendario2').text(calendar2.currentData.viewTitle)


});

document.getElementById('next-calendario2').addEventListener('click', function () {
    calendar2.prev();
    $('.data_calendario2').text(calendar2.currentData.viewTitle)

});



function diasCalendario2(dia) {
    return '#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-' +
        dia + ' > div > a';
}

function diasCalendario1(dia) {
    return '#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-' +
        dia + ' > div > a';
}

function toggle_elementos_no_header() {
    $('.pesquisar_pessoas').toggle();
    $('.component_datas').toggle();
    $('.pesquisar-text-header').toggle();
    $('.logo').toggle();
    $('.icons-menu-bottom').toggle();
    $('.right-header-nav').toggle();

}


/**
 * Modal micro-sistem
 * 
 */
document.querySelector('.dia_inteiro_tarefa').addEventListener('click', () => {
    if ($('#dia_inteiro_tarefa').is(':checked')) {
        $('.tempo_tarefa').hide()
        return;
    }
    $('.tempo_tarefa').show()
})

document.querySelector('.dia_inteiro_lembrete').addEventListener('click', () => {
    if ($('.dia_inteiro_lembrete').is(':checked')) {
        $('.hora_lembrete').hide()
        return;
    }
    $('.hora_lembrete').show()
});

document.querySelector('.dia_inteiro_evento').addEventListener('click', () => {
    if ($('.dia_inteiro_evento').is(':checked')) {
        $('.hora_evento_inicio_div').hide()
        $('.hora_evento_fim_div').hide()
        $('.data_fim_evento').show()
        return;
    }
    $('.hora_evento_inicio_div').show()
    $('.hora_evento_fim_div').show()
    $('.data_fim_evento').hide()
});




