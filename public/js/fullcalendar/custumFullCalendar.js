document.addEventListener('DOMContentLoaded', function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

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
                swal("O evento " +response + "Foi criado com sucesso!");
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

    
        
    });
   
    calendar.render();
    

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

});