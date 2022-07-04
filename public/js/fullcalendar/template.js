$(document).ready(function () {
    var bt_eventos = document.querySelector('.bt-eventos');
    var bt_tarefa = document.querySelector('.bt-tarefa');
    var bt_lembrete = document.querySelector('.bt-lembrete');

  
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

});

