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
<body>

   

    <nav class="navbar navbar-expand-sm nav-menu" style="background: #fff">

        <div class="container-fluid agenda-logo">            <!-- Links -->
            <ul class="navbar-nav">
                <li style="margin-left:20px;">
                    <i class="fa-solid fa-bars icons-menu-bottom" style="height:50px; width:25px; font-size:20px; margin-right:20px; margin-top:10px;"></i>
                </li>
                <li class="nav-item">
                    <svg focusable="false" viewBox="0 0 24 24">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                    </svg>
                </li>
                <li>
                    <img src="https://ssl.gstatic.com/calendar/images/dynamiclogo_2020q4/calendar_<?php echo date('d') ?>_2x.png" 
                    width="40" height="40" alt="">
                    <span style="margin-left:10px; font-weight:500; font-size:20px; #ccc">Agenda</span>
                </li>
            </ul>
        </div>

  
  
        <div class="input-group mt-3 pesquisar_pessoas" style="margin-right:90px;">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1" style="height:50px; ">
                  <i class="fas fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Pesquisar Pessoas">
          </div> 


        <div class="col-7  component_datas">        
            <div class="col-1" style="float:left;">
                <button type = "button" class = "btn btn-default btn-sm move-today" data-action ="move-today"> Today </button>
                <button class="botao-hoje" id="my-today-button">Hoje</button>
            </div>
            <span class="m-1" style="margin-top:10px;">
                <div class="prev" style="width:10px;float:left; margin-top:5px;"></div>
                <div class="next" style="width:10px; float:left; margin-top:5px; margin-left:20px; margin-right:20px;"></div>
           
                <span class="data-header fc-header-title my-2" style="font-size:20px; margin-left:20px;"></span>
            </span>
        </div>

        <div class="col-3">
            <i class="fa fa-search buscar_pessoas_agenda" style="font-size:30px; margin-right:20px; cursor:pointer;"></i>

            <i class="fa-solid fa-circle-question"  style="font-size:30px; margin-right:20px;"></i>

            <i class="fa fa-cog m-1" style="font-size:30px; "></i>

            <select name="" id=""  style="margin-right:20px; margin-left:10px;">
                <option selected>Mês</option>            
            </select>

            <i class="fa fa-cog" style="font-size:30px;"></i>

             
        
        </div>



    </nav>


    <div class="container-fluid p-0">
        <div class="col-2  sider-bar" style="float:left;  border-right:1px solid #ccc;;">          
           
            <div class="col-sm-12" style="height:200px;">
                <button class="btn btn-success bt-criar">Criar</button>
            </div>

        


            <div class="col-12" style=" padding:10px; "> 
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1" style="height:50px;">
                          <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Pesquisar Pessoas">
                  </div>           
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" id="minhasAgendaLinks" data-bs-toggle="dropdown" aria-expanded="false">
                      Minhas Agendas
                    </a>                  
                    <ul class="dropdown-menu" aria-labelledby="minhasAgendaLinks">
                      <li>  <input type="checkbox"  class="mr-2" name=""  id="">NOME:</li>
                      <li>  <input type="checkbox" name=""  id="">NOME:</li>
                      <li>  <input type="checkbox" name=""  id="">NOME:</li>
                    </ul>
                  </div>
            </div> 
            
            <div class="col-12" style=" padding:10px;">              
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" id="outrasAgendas" data-bs-toggle="dropdown" aria-expanded="false">
                      Outras Agendas
                    </a>                  
                    <ul class="dropdown-menu" aria-labelledby="outrasAgendas">
                      <li>  <input type="checkbox"  class="mr-2" name=""  id="">NOME:</li>
                      <li>  <input type="checkbox" name=""  id="">NOME:</li>
                      <li>  <input type="checkbox" name=""  id="">NOME:</li>
                    </ul>
                  </div>
            </div> 
        </div>         
        <div class="col-10" id="calendar" style="float:left;  border:1px solid #ccc;;">
         
            <div class="form-group">
            
            </div>
        </div>
    </div>
    


</body>

</html>




<script src='{{ asset('js/jquery-1.10.2.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/jquery-ui.custom.min.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/fullcalendar.js') }}' type="text/javascript"></script>
<script src='{{ asset('js/script.js') }}' type="text/javascript"></script>
<script>
  $(document).ready(function(){
    
    // $('.hoje').html($('.fc-button-today'))
    $('.next').html($('.fc-button-next'));
    $('.prev').html($('.fc-button-prev'));
    $('.fc-header').remove()
    
    $('.component_datas').show();
    $('.pesquisar_pessoas').hide();
 
 
    $('.buscar_pessoas_agenda').click(function(){
     $('.pesquisar_pessoas').toggle('slow');
     $('.component_datas').toggle('slow');
 })


 $('.icons-menu-bottom').click(function(){
     $('.sider-bar').toggle('slow');
    

 })
 


});


</script>