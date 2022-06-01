<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href=' {{ asset('css/fullcalendar.css') }}' rel='stylesheet' />
    <link href=' {{ asset('css/fullcalendar.print.css') }}' rel='stylesheet' media='print' />
    <link href=' {{ asset('css/defaultcalendario.css') }}' rel='stylesheet' />
    <link href=' {{ asset('css/main.css') }}' rel='stylesheet' />

<body>
    


    <nav class="navbar navbar-expand-sm nav-menu" style="background: #fff">

        <div class="container-fluid agenda-logo">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="icons-menu-bottom">
                    <i class="fa-solid fa-bars"></i>
                </li>
                <li class="nav-item">
                    <svg focusable="false" viewBox="0 0 24 24">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                    </svg>
                </li>
                <li class="logo">
                    <img src="https://ssl.gstatic.com/calendar/images/dynamiclogo_2020q4/calendar_2_2x.png"
                        width="40" height="40" alt="">
                    <span style="">Agenda</span>
                </li>

                <li class="pesquisar-text-header">
                    <i class="fa-solid fa-angle-left"></i>
                    <b>Pesquisar</b>
                </li>
            </ul>
        </div>



        <div class="input-group mt-3 pesquisar_pessoas" style="margin-right:90px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" style="height:50px; ">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Pesquisar Pessoas" id="pesquisar_header_input">
        </div>


        <div class="col-7  component_datas">
            <div class="col-1" style="float:left;">
                <button class="botao-hoje" id="my-today-button">Hoje</button>
            </div>
            
            <div class="nextprev-header">
                <div class="prev" id="prev">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div class="next" id="next">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>

                <span class="data-header fc-header-title my-2"></span>
            </span>
        </div>

        <div class="col-3 right-header-nav">
            <i class="fa fa-search buscar_pessoas_agenda"></i>

            <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="interrogacao-icon">
                <path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"></path></svg>

            <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="config-icon">
                <path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z"></path><circle cx="12" cy="12" r="3.5"></circle></svg>

            <a href="#" title="" class="btn btn-light botao-header-datas">
                Mês <span class="icon">
                    <i class="fa-solid fa-caret-down"></i>
                </span>
            </a>
            <div class="select_options_de_datas">
                <ul>
                    <li class="dia" id="dia">Dia</li>
                    <li class="semana" id="semana">Semana</li>
                    <li class="mes" id="mes">Mês</li>
                    <li class="ano" id="ano">Ano</li>
                    {{-- <li class="programacao" id="programacao">Programação</li>
                    <li class="4dias" id="4dias">4 Dias</li> --}}
                </ul>

            </div>
        </div>
    </nav>


    <div class="container-fluid p-0">
        <div class="col-2  sider-bar" style="float:left;  border-top:1px solid #ccc;">


            <div class="col-sm-12 mb-3">
                <button class="btn  bt-criar-evento">
                    <svg width="36" height="36" viewBox="0 0 36 36">
                        <path fill="#34A853" d="M16 16v14h4V20z"></path>
                            <path fill="#4285F4" d="M30 16H20l-4 4h14z"></path>
                            <path fill="#FBBC05" d="M6 16v4h10l4-4z"></path>
                            <path fill="#EA4335" d="M20 16V6h-4v14z"></path>
                            <path fill="none" d="M0 0h36v36H0z"></path>
                        </svg>
                     <span class="bt-criar-evento-text" >Criar</span>   
                    <span class="icon icon-criar-evento">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </button>
            </div>
            <div class="header-calendario2" style="">
                <span class="data_calendario2"></span>
                <div class="seta-calendario2">
                    <div class="prev-calendario2" id="prev-calendario2">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="next-calendario2" id="next-calendario2">
                        <i class="fa-solid fa-angle-right"></i>
                   </div>
                </div>
            </div>
            <div id="calendario2">
            </div>

            <div class="div-criar-evento">
                <ul>
                    <li>Evento</li>
                    <li>Tarefa</li>
                    <li>Agendamento de horários</li>

                </ul>
            </div>


            <div class="col-12" style=" padding:10px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1" style="height:50px;">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Pesquisar Pessoas">
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" id="minhasAgendaLinks"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Minhas Agendas
                    </a>
                    <ul class="opcoesMinhasAgendas" style="border:0; display:none; ">
                        <div class="form-check" style="margin-left:30px; width:300px; ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check" style="margin-left:30px; width:300px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Checked checkbox
                            </label>
                        </div>
                    </ul>

                    <div>
                        <a class="btn dropdown-toggle" href="#" role="button" id="OutrasAgendas"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Outras Agendas
                        </a>
                        <ul class="opcoesOutrasAgendas" style="border:0; display:none; ">
                            <div class="form-check" style="margin-left:30px; width:300px; ">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check" style="margin-left:30px; width:300px;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                        </ul>

                    </div>
                </div>
              </div>
            <div class="col-12 my-5" style=" padding:10px; float:left;"></div>
        </div>
        <div class="col-10" id="calendar" style="float:left;"></div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default bt-close-modal" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

</body>

</html>




<script src='{{ asset('js/jquery-1.10.2.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/jquery-ui.custom.min.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/fullcalendar.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/main.js') }}'></script>
<script src='{{ asset('js/pt.js') }}'></script>
<script>
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
            $('.fc-daygrid-bod').css('width','100%');         
            $('#calendar').addClass('col-10');
            $('#calendar').removeClass('col-12');
        
            if($('.sider-bar').css('display') == 'none'){
                $('#calendar').removeClass('col-10');
                $('#calendar').addClass('col-12');
                $('.fc-col-header').css('width','100%');
                $('.fc-daygrid-body').css('width','100%');
                $('.fc-scrollgrid-sync-table').css('width','100%');            
            }

            calendar.render();

           
           
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

          $('.bt-close-modal').click(function() {
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
        mudarNomesDiasThCalendario()
        $('.data-header').text($('.fc-toolbar-title').text())
        document.getElementById('my-today-button').addEventListener('click', function() {
            calendar.today();
            calendar2.today();
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
            $('.data-header').text(calendar.currentData.viewTitle)    
          
        });

        document.getElementById('prev').addEventListener('click', function() {
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



    var calendarE2 = document.getElementById('calendario2');
    var calendar2 = new FullCalendar.Calendar(calendarE2, {      
        aspectRatio: 20,
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
      
        
        $('.data_calendario2').text(calendar2.currentData.viewTitle)
        $('.fc-scroller').css('overflow','hidden')

        document.getElementById('prev-calendario2').addEventListener('click', function() {         
            calendar2.prev();
            $('.data_calendario2').text(calendar2.currentData.viewTitle)
            

        });
   
        document.getElementById('next-calendario2').addEventListener('click', function() {
            calendar2.prev();
            $('.data_calendario2').text(calendar2.currentData.viewTitle)                   

        });



        function diasCalendario2(dia){
           return '#calendario2 > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-'+dia+' > div > a';
        }
        function diasCalendario1(dia){
           return '#calendar > div.fc-view-harness.fc-view-harness-active > div > table > thead > tr > th > div > div > table > thead > tr > th.fc-col-header-cell.fc-day.fc-day-'+dia+' > div > a';
        }         
   
</script>
