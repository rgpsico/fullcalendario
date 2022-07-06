<!DOCTYPE html>
<html lang="en">

<head>
    <title>Configuração</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
      a{
        text-transform: none;
        text-decoration: none;
        padding: 0;
        color:red;
      }
      body{
        margin:0;
        padding:0;
      }
      
    </style>
<body>

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

    <div class="row" style="height:30px; background:#237985; color:#fff;">
      <p style="text-align: center">NEUSTADT ATENDIMENTO MU </P>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid ">
        <a class="navbar-brand" href="#" style="margin-left:20px; margin-right:90px;">
          <img src="https://mufitness.com.br/modulo/agenda/app/v3.11/img/logo_mu.png" 
          height="60px"
          width="60px"
          alt="" 
          srcset=""
          style="">
        </a>
        <button class="navbar-toggler" type="button"
         data-bs-toggle="collapse" 
         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Módulos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Agenda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Alunos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Funcionários</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Configurações
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Relátorios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <div class="row" style=" margin-left:20px;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Configurações da agenda </a></li>
          <li class="breadcrumb-item active" aria-current="page">administração</li>
        </ol>
      </nav>
    </div>

    <div class="row p-2">
    <ul class="nav nav-tabs" style="">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Teste</a>
      </li>
     
    </ul>
  </div>
    <main role="main" class="container">
        <div class="row">          
                <div class="col-3">
                    <div class="col-auto">               
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                          </div>
                          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                      </div>


                      <div class="col-auto" style="margin-top:50px;">                     
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                          </div>
                          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                      </div>                   
                
                </div>

                <div class="col-3" >  
                    <div class="input-group mb-2">                                               
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                  </div>

                  <div class="input-group mb-2" style="margin-top:50px;">
                    
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                </div>

                    <div class="col-3" >  
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                  </div>

                 
                </div>   
        </div>
      </main>


    
  

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

