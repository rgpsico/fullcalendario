$(document).ready(function() {

    $('.pesquisar-text-header').hide();
    $('.fc-header').remove()
    $('.component_datas').show();
    $('.pesquisar_pessoas').hide();


    $('.buscar_pessoas_agenda').click(function() {
        $('.pesquisar_pessoas').toggle();
        $('.component_datas').toggle();
        $('.pesquisar-text-header').toggle();
        $('.logo').toggle();
        $('.icons-menu-bottom').toggle();

    })


    $('.icons-menu-bottom').click(function() {
        $('.sider-bar').toggle();
    })

    $('.component_datas').click(function() {
        $('.select_options_de_datas').hide('fast');
    })

    $('.botao-header-datas').click(function() {
        $('.select_options_de_datas').toggle('fast');
    })

    $('.bt-criar-evento').click(function() {
        $('.div-criar-evento').toggle('fast');
    })

    $('#minhasAgendaLinks').click(function() {
        $('.opcoesMinhasAgendas').toggle('fast');
    })

    $('#OutrasAgendas').click(function() {
        $('.opcoesOutrasAgendas').toggle('fast');
    })

    $('.close-modal').click(function(){
        $('.modal').modal('hide');
    })

})


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
        editable:true,
        lang: 'pt-br',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth, month'
        },
        initialDate: '2022-05-31',
        locale:'pt-br',

        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        events: [
        {
        id: 1,
        title: "Meeting",
        start: "2022-06-01T14:30:00",
        extendedProps: {
            status: "done"
        }          
             } 
      
],
        selectable:true,
        selectHelper:true,
        select: function(start, end, allDay)
        {
          $('.modal').modal('show');
        }
    });

    



    calendar.render();
    $('.fc-header-toolbar').hide();
    changeName()
    $('.data-header').text($('.fc-toolbar-title').text())
    document.getElementById('my-today-button').addEventListener('click', function() {
        calendar.today();
        $('.data-header').text($('.fc-toolbar-title').text())
       

    });


    document.getElementById('dia').addEventListener('click', function() {       
        calendar.changeView('timeGridDay');

    });

    document.getElementById('semana').addEventListener('click', function() {
        calendar.changeView('timeGridWeek');


    });

    document.getElementById('mes').addEventListener('click', function() {
        calendar.changeView('dayGridMonth');        
     
    });

    document.getElementById('ano').addEventListener('click', function() {
        calendar.changeView('yearGridMonth');        
     
    });

    document.getElementById('next').addEventListener('click', function() {
        calendar.next();
        $('.data-header').text($('.fc-toolbar-title').text())
      
    });

    document.getElementById('prev').addEventListener('click', function() {
        calendar.prev();
        $('.data-header').text($('.fc-toolbar-title').text())          

    });


  


    function changeName() {
        $('#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-sun > div > a')
            .text('Domingo')
        $('#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-mon > div > a')
            .text('Segunda')
        $('#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-tue > div > a')
            .text('Terça')
        $('#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-wed > div > a')
            .text('Quarta')
        $('#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-thu > div > a')
            .text('Quin')
        $('#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-fri > div > a')
            .text('Sex')
        $('#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-sat > div > a')
            .text('Sabado')


            $('#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-sun > div > a')
            .text('D')
        $('#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-mon > div > a')
            .text('S')
        $('#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-tue > div > a')
            .text('T')
        $('#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-wed > div > a')
            .text('Q')
        $('#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-thu > div > a')
            .text('Q')
        $('#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-fri > div > a')
            .text('S')
        $('#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-sat > div > a')
            .text('S')
    }

});



var calendarE2 = document.getElementById('calendario2');
var calendar2 = new FullCalendar.Calendar(calendarE2, {
        editable:true,
        isRTL: false,
        lang: 'pt-br',      
        headerToolbar: {
            left: 'prev,next today',
            center: '',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        locale:'pt-br',           

        navLinks: false, // can click day/week names to navigate views
        businessHours: false, // display business hours
        editable: true,
        selectable: true,
        events: [],
        selectable:true,
        selectHelper:true,
        select: function(start, end, allDay)
        {
          console.log(start)
        }
    });

    calendar2.render()
  
    $('.fc-scroller').css('overflow','hidden')

    document.getElementById('prev-calendario2').addEventListener('click', function() {
        calendar2.prev();
        

    });

    document.getElementById('next-calendario2').addEventListener('click', function() {
        calendar2.prev();
               

    });

 