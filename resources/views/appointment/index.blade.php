<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agenda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href=' {{ asset('css/fullcalendar.css') }}' rel='stylesheet' />
    <link href=' {{ asset('css/fullcalendar.print.css') }}' rel='stylesheet' media='print' />
    <link href=' {{ asset('css/defaultcalendario.css') }}' rel='stylesheet' />
    <link href=' {{ asset('css/main.css') }}' rel='stylesheet' />
<body>



    <div class="modal-micro my-2">        
        <div class="modal-micro-header bg-light" style="height:40px;">
            <div class="row">
                <div class="col-3 my-2">
                    <span class="fechar-modal-micro" alt="mover Modal" style="margin-left:5px;">
                        <i class="fa fa-align-left" aria-hidden="true" style="cursor:move;"></i>
                    </span>
                </div>

                <div class="col-1 my-1  offset-8">
                    <span class="fechar-modal-micro" alt="Fechar Modal">
                        <span class="fechar-modal-micro my-1 col-1 offset-10" alt="Fechar Modal">&times;</span>
                    </span>
                </div>
           
              
               
            </div>
           
        </div>
        <div class="modal-micro-body my-4">
            <div class="row">
                <div class="col-12 col-md-10 offset-2">
                    <div class="input-group has-validation">
                    <input type="text" class="form-control" id="title" placeholder="Adicionar Titulo"  required
                    style="border:none;  border-bottom:1px solid #ccc; font-size:24px;" value="evento teste">                 
                    </div>
                    <span class="text-danger" id="titleError"></span>
                </div>               
                <div class="opcoes-modal-micro p-3 col-2 offset-1">
                    <ul>
                        <li class="bt-eventos">Evento</li>
                        <li class="bt-tarefa">Tarefa</li>
                        <li class="bt-lembrete">Lembrete</li>
                        <!-- <li>Agendamento de horarios</li> -->
                    </ul>
                </div>
             </div>
             <div class="row abaLembrete">                 
                    <div class="col-1" style="margin-left:30px;">
                        <i class="fa fa-user"></i>                 
                    </div>
                    <div class="col-4">
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <input placeholder="Select date" type="text" id="example" class="form-control">
                            <label for="example">Try me...</label>
                            <i class="fas fa-calendar input-prefix"></i>
                          </div>
                     
                    </div>
                    <div class="col-4 hora_lembrete">
                        <label for="">Hora do  Lembrete</label>
                        <input type="time" class="border-0" id="hora_lembrete">
                    </div>

                    <div class="row my-4">
                        <div class="col-1" style="margin-left:30px;">
                            <i class="fa fa-user"></i>                 
                        </div>
                        <div class="col-4">
                            <select class="form-control border-0" id="" style="width:200px;">
                                <option>Não se repete</option>
                                <option>Todos os dias</option>
                                <option>Semanal: cada sexta-feira</option>
                                <option>Mensal no (a) sexta-feira</option>
                                <option>Anual em abril 1</option>
                                <option>Todos os dias da semana (segunda a sexta-feita)</option>
                                <option>Personalizar</option>
                            </select>                             
                        </div>
                        <div class="col-3">
                            <input type="checkbox" class="form-check-input dia_inteiro_lembrete">
                            <label class="form-check-label">Dia inteiro</label>
                        </div>
                     
                    </div>
            
                

             </div>
             <div class="row abaTarefas">
                    <div class="col-1" style="margin-left:28px;">
                        <i class="fa-thin fa-clock-one"></i>
                    </div>               
                    <div class="col-4">
                        <input type="date" type="date" class="" placeholder="data">
                    </div>
                    <div class="col-2">
                        <input type="time" type="date" class="tempo_tarefa" placeholder="data">
                    </div>
                   
                        <div class="form-check col-3 my-3 " style="margin-left:90px;">
                            <input type="checkbox" class="form-check-input dia_inteiro_tarefa" id="dia_inteiro_tarefa">
                            <label class="form-check-label" for="dia_inteiro_tarefa">Dia inteiro</label>
                        </div>
                   

                    <div class="col-4 offset-1 my-2" style="margin-left:75px;">
                        <div class="form-group">                          
                            <select class="form-control border-0" id="exampleFormControlSelect1">
                                <option>Não se repete</option>
                                <option>Todos os dias</option>
                                <option>Semanal: cada sexta-feira</option>
                                <option>Mensal no (a) sexta-feira</option>
                                <option>Anual em abril 1</option>
                                <option>Todos os dias da semana (segunda a sexta-feita)</option>
                                <option>Personalizar</option>
                              </select>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-1" style="margin-left:30px;">
                            <i class="fa fa-align-left" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            <textarea name="" id="" cols="30" rows="5" class="form-control bg-light border-light" placeholder="Adicionar uma descrição"></textarea>
                        </div>
                    </div>

                    <div class="col-1 my-3" style="margin-left:40px;">
                        <i class="fa-solid fa-align-justify"></i>
                    </div>

                    <div class="col-5 my-3">
                        <div class="form-group">                          
                            <select class="form-control border-0" id="exampleFormControlSelect1">
                              <option>Minhas tarefas</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 my-3 offset-7">
                        <button class="btn"> Mais opções</button>
                        <div class="btn btn-primary salvar_form">Salvar</div>
                    </div>
                </div>
            
            <div class="modal-micro-content abaEventos col-12" style="padding-left:50px ;"> 
                <div class="row" >
                    <div style="width:40px;">
                        <i class="far fa-clock" style="margin-right:20px;"></i>
                    </div>                        
                    <div class="col-4 col-lg-3">                  
                        <label for="">Data do evento</label>
                        <input type="date"  placeholder="Date"  id="start-evento" style="border:none;" >
                    </div>
                    <div class="col-5 col-lg-4 data_fim_evento" style="display:none;">
                        <label for="">Data final do evento</label>
                        <input type="date"  placeholder="Date"  id="end-evento" style="border:none;" >
                    </div>
                    <div class="col-3 col-lg-3 hora_evento_inicio_div">
                        <label for="">Hora inicio</label>
                        <input type="time" id="hora_inicio_evento" name="hora_inicio_evento" min="09:00" max="18:00" >
                    </div>
                    
                    <div class="col-2  col-lg-2 hora_evento_fim_div">
                        <label for="">Hora fim</label>
                         <input type="time" id="hora_fim_evento" name="hora_fim_evento" min="09:00" max="18:00"  placeholder="10:00">
                    </div>
                </div>
                 
               

                <div class="row my-2" style="margin-left:35px;">
                    <div class="form-check col-3">
                        <input type="checkbox" class="form-check-input dia_inteiro_evento" id="dia_inteiro_evento">
                        <label class="form-check-label" for="dia_inteiro_evento">Dia inteiro</label>
                    </div>
                    <!-- <div class="col-4">Fuso horario</div> -->
                </div>

                <div class="row">
                    <div class="col-3" style="margin-left:35px;">
                        <div class="form-group">                          
                            <select class="form-control border-0" id="exampleFormControlSelect1">
                              <option>Não se repete</option>
                              <option>Todos os dias</option>
                              <option>Semanal: cada sexta-feira</option>
                              <option>Mensal no (a) sexta-feira</option>
                              <option>Anual em abril 1</option>
                              <option>Todos os dias da semana (segunda a sexta-feita)</option>
                              <option>Personalizar</option>
                            </select>
                        </div>
                    </div>            
                    <div class="col-12" style="margin-left:40px;">
                        <span class="text-primary font-weight-bold"><b> Encontrar um horário </b> </span>
                    </div>
                </div>
                    <div class="row  my-3">                         
                        <ul style="list-style-type:none;">                         
                            <li>
                                <i class="fa-user fas fa-map-marker-alt my-3" style="margin-right:20px;"></i> 
                                <input type="text" class="border-0" placeholder="Adicionar convidado" id="adicionar_convidado" style="height:40px;" >
                            </li>
                            <li class="border-top-1 border-light my-3">
                                <i class="fa-spacing fas fa-map-marker-alt my-3" style="margin-right:20px;">
                                </i>   <input type="text" class="border-0" placeholder="Adicionar Local"  id="adicionar_local" style="height:40px;" >
                            </li>
                            <li><i class="fa fa-align-left my-3" style="margin-right:20px;">
                            
                            </i> 
                            <input type="text" class="border-0" placeholder="Adicionar Descrição ou anexos"  id="adicionar_anexo" style="height:40px;" ></li>
                            <li><i class="fa fa-calendar-alt my-3" style="margin-right:20px;"></i> Aluno</li>
                          </ul>
                    </div>
                    <div class="col-md-6 my-3 offset-7">
                        <button class="btn"> Mais opções</button>
                        <div class="btn btn-primary salvar_form">Salvar</div>
                    </div>
            </div>               
        </div>    
    </div>
</div>

    <nav class="navbar navbar-expand-sm nav-menu  col-lg-11 col-xl-12" style="background: #fff">

        <div class="agenda-logo">
            <!-- Links -->
            <ul class="navbar-nav display-sm-none">
                <li class="icons-menu-bottom">
                    <i class="fa-solid fa-bars"></i>
                </li>
                <li class="nav-item">
                    <svg focusable="false" viewBox="0 0 24 24">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                    </svg>
                </li>
                <li class="logo">
                    <img src="https://ssl.gstatic.com/calendar/images/dynamiclogo_2020q4/calendar_2_2x.png" width="40"
                        height="40" alt="">
                    <span style="">Agenda</span>
                </li>

                <li class="pesquisar-text-header">
                    <i class="fa-solid fa-angle-left"></i>
                    <b>Pesquisar</b>
                </li>
            </ul>
        </div>



        <div class="input-group mt-3 pesquisar_pessoas mb-2 ">
            <div class="input-group-prepend">
                <span class="input-group-text" id="pesquisar_search_input" style="height:50px; background:#fff; ">
                    <i class="fa fa-search "></i>
                </span>
            </div>
            {{--  --}}
            <input type="text" class="form-control pesqu" placeholder="Pesquisar" id="pesquisar_header_input">
           
            <div class="input-group-append preprend-pesquisar" style="background:#fff; cursor:pointer;">
                <span class="input-group-text h-100">
                    <i class="fa-solid fa-caret-down">
                    </i>
                </span>
                
            </div> 
            <div class="submenu-pesquisar-principal menuFloat">
                <form>
                    <div class="form-group row">
                      <label for="Pesquisar" class="col-form-label" style="width:115px;font-size:14px;">Pesquisar Em</label>
                      <div class="col-sm-2">
                        <select class="form-control form-control-sm" name="Oque" id="oQue" style="width:100px;">
                            <option>Small select</option>
                          </select>
                                              </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label" >O quê</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm w-75%" id="Pesquisar" placeholder="Email" style="width:70%;">

                       
                    </div>
                    </div> 
                    
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Quem</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="Quem" name="Quem" placeholder="Quem" style="width:70%;">
                        </div>
                      </div>   


                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Onde</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="Onde" name="Onde" placeholder="Onde" style="width:70%;">
                        </div>
                      </div> 
                      
                      
                      <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label" >Não tem</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="Nao_tem" name="Nao_tem" placeholder="Não tem" style="width:70%;">
                                </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Data</label>
                        <div class="form-group col-2">                        
                            <input type="date" class="form-control" id="Data_start" placeholder="Data de início" name="Data_start" style="width:112px;" placeholder="Data de Início">
                          </div>
                           <span class="my-3" style="width:10px; margin-left:10px; margin-right:10px;">Até</span> 
                          <div class="form-group col-4">                
                            <input type="date" class="form-control" id="Data_end" placeholder="Data de término" name="Data_end" style="width:112px;" placeholder="Data de término">
                          </div>                 
                        </div>

                    <div class="form-group row">
                      <div class="col-sm-4 col-md-8 offset-sm-5 offset-md-7 ">
                        <button type="submit" class="btn" style="font-size:14px; font-weight:500; letter-spacing:.25px;">Redefinir</button>
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                      </div>
                    </div>
                  </form>


            </div>        
        </div>
        <div class="no-hidden"></div>


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

        <div class="col-3  right-header-nav">

            <div class="icones-header">
                <i class="fa fa-search buscar_pessoas_agenda"></i>

                <div class="div-interrogacao">
                    <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="interrogacao-icon">
                        <path
                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 
                            10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 
                            3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z">
                        </path>
                    </svg>
                    <div class="submenu-interrogacao">
                        <ul style="padding:0;">
                            <li><span>Teste 01</span></li>
                            <li><span>Teste 02</span></li>
                            <li><span>Teste 03</span></li>
                        </ul>
                    </div>
                </div>


                <div class="config-icon-menu">
                    <a href="{{route('config')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="config-icon">
                        <path
                            d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z">
                        </path>
                        <circle cx="12" cy="12" r="3.5"></circle>
                    </svg>
                     </a>
                 </div>

                 <div class="menuFloat submenu-icon-config" style="right:8.7%;">
                    <ul style="padding:0;">
                        <li><span>Teste 01</span></li>
                        <li><span>Teste 02</span></li>
                        <li><span>Teste 03</span></li>
                    </ul>
                </div>

            </div>

            <div class="bt-mes-div">
                <a href="#" title="" class="btn btn-light botao-header-datas">
                    Mês <span class="icon">
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                </a>
                <div class="select_options_de_datas">
                    <ul>
                        <li class="dia" id="dia"><span>Dia</span> </li>
                        <li class="semana" id="semana"> <span>Semana</span> </li>
                        <li class="mes" id="mes"> <span>Mês</span></li>
                        <li class="ano" id="ano"> <span>Ano</span></li>
                        {{-- <li class="programacao" id="programacao">Programação</li>
                    <li class="4dias" id="4dias">4 Dias</li> --}}
                    </ul>

                </div>
            </div>

        </div>
    </nav>


    <div class="container-fluid p-0">
        <div class="col-md-3 col-lg-2 col-sm-2 col-xl-2  sider-bar" style="float:left;  border-top:1px solid #ccc;">


            <div class="col-sm-12 mb-3">
                <button class="btn  bt-criar-evento">
                    <svg width="36" height="36" viewBox="0 0 36 36">
                        <path fill="#34A853" d="M16 16v14h4V20z"></path>
                        <path fill="#4285F4" d="M30 16H20l-4 4h14z"></path>
                        <path fill="#FBBC05" d="M6 16v4h10l4-4z"></path>
                        <path fill="#EA4335" d="M20 16V6h-4v14z"></path>
                        <path fill="none" d="M0 0h36v36H0z"></path>
                    </svg>
                    <span class="bt-criar-evento-text">Criar</span>
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
            <div id="calendario2"></div>

            <div class="div-criar-evento">
                <ul>
                    <li><a href="#" id="bt-evento-side-bar"> Evento</a> </li>
                    <li><a href="#">Tarefa</a></li>
                    <li><a href="#">Agendamento de horários</a></li>

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
        <div class="col-md-10" id="calendar" style="float:left; width:83%;"></div>
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




<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src='{{ asset('js/fullcalendar/template.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/fullcalendar/calendario_sidebar.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/fullcalendar.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/fullcalendar/main.js') }}'></script>
<script src='{{ asset('js/fullcalendar/pt.js') }}'></script>
<script src='{{ asset('js/fullcalendar/utils.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/fullcalendar/custumFullCalendar.js') }}'></script>
<script src="https://momentjs.com/downloads/moment.js"></script>

