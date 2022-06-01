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
                    <img src="https://ssl.gstatic.com/calendar/images/dynamiclogo_2020q4/calendar_<?php echo date('d'); ?>_2x.png"
                        width="40" height="40" alt="">
                    <span style="margin-left:10px; font-weight:500; font-size:20px; #ccc">Agenda</span>
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
            <span class="m-1" style="margin-top:10px;">
                <div class="prev" id="prev"><i class="fa-solid fa-angle-left"></i></div>
                <div class="next" id="next"><i class="fa-solid fa-angle-right"></i></div>

                <span class="data-header fc-header-title my-2" style="font-size:20px; margin-left:20px;"></span>
            </span>
        </div>

        <div class="col-3 right-header-nav">
            <i class="fa fa-search buscar_pessoas_agenda"></i>

            <i class="fa-solid fa-circle-question interrogacao-icon"></i>

            <i class="fa fa-cog m-1" style="font-size:30px; "></i>

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
                    <li class="programacao" id="programacao">Programação</li>
                    <li class="4dias" id="4dias">4 Dias</li>
                </ul>

            </div>
        </div>



    </nav>


    <div class="container-fluid p-0">
        <div class="col-2  sider-bar" style="float:left;  border-right:1px solid #ccc;;">


            <div class="col-sm-12" style="height:200px;">
                <button class="btn btn-success bt-criar-evento">Criar
                    <span class="icon">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </button>
            </div>
            <div class="header-calendario2" style="display:flex;margin-bottom:10px;">
                <span class="data_calendario2">Fevereiro de 2022</span>
                <div class="seta-calendario2" style="width:50px;  margin-left:48%;">
                    <div class="prev-calendario2" id="prev-calendario2" style="float:left; margin-right:20px;">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="next-calendario2" id="next-calendario2">
                        <i class="fa-solid fa-angle-right"></i>
                   </div>
                </div>
            </div>
            <div id="calendario2"
                style="padding:1px; border:0; min-height:430px; width:95%; color:red; font-size:10px;">


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
            <div class="col-12 my-5" style=" padding:10px; float:left; ">

            </div>
        </div>
        <div class="col-10" id="calendar" style="float:left;  border:1px solid #ccc;;">


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


    })
   

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendarE2 = document.getElementById('calendar2');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            editable:true,
            lang: 'pt-br',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            initialDate: '2022-05-31',
            locale:'pt-br',

            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
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

        



        calendar.render();
        $('.fc-header-toolbar').hide();
        changeName()
        $('.data-header').text($('.fc-toolbar-title').text())
        document.getElementById('my-today-button').addEventListener('click', function() {
            calendar.today();
            $('.data-header').text($('.fc-toolbar-title').text())
            component()

        });


        document.getElementById('dia').addEventListener('click', function() {
            component()


        });

        document.getElementById('semana').addEventListener('click', function() {
            component()


        });

        document.getElementById('mes').addEventListener('click', function() {
            component()


        });

        document.getElementById('next').addEventListener('click', function() {
            calendar.next();
            $('.data-header').text($('.fc-toolbar-title').text())
            component()
        });

        document.getElementById('prev').addEventListener('click', function() {
            calendar.prev();
            $('.data-header').text($('.fc-toolbar-title').text())
            component()

        });


        function component() {
            $('.dia').html($('.fc-timeGridDay-button'))
            $('.semana').html($('.fc-timeGridWeek-button'))
            $('.mes').html($('.fc-dayGridMonth-button'))
            $('.4dia').html($('.fc-listMonth-button'))
        }


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
        }

    });



   
</script>
