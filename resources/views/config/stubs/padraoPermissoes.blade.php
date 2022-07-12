<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
  referrerpolicy="no-referrer" />
 
<h3>PADRAO</h3>

<div class="container mb-5 bg-light">
<div class="row">   
        <div class="col-12 col-md-2 mr-2">
            <div class="form-group">
                <label for="nome">*Intervalo Agenda</label>
                <div class="input-group mb-3">            
                    <span class="input-group-text"><i class="fa-solid fa-circle-info"></i></span>
                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    <span class="input-group-text"><i class="fa-solid fa-circle-info"></i></span>
                  </div>
            </div>
        </div>

        <div class="col-12 col-md-4 ml-3">
            <div class="form-group">
                <label for="nome">Altura da linha de 30 minutos</label>
                 <div class="input-group">             
                <span class="input-group-text">
                    <i class="fa-solid fa-circle-info"></i></span>
                <input type="numeric" id="nome" name="nome" class="form-control">
                <span class="input-group-text">Pixels</span>
            </div>
            </div>
        </div>
        
        <div class="col-12 col-md-4  my-md-0  my-2">
            <div class="form-group">
                <label for="nome">*Antecedência para devolução de crédito</label>
                <input type="hour" id="nome" name="nome" class="form-control">
            </div>
        </div>  

</div>
<br>


<div class="row bg-light ">   
    <div class="col-12 col-md-2">
        <div class="form-group">
            <label for="nome">Hora Início</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
    </div>

    <div class="col-12 col-md-2">
        <div class="form-group">
            <label for="nome">Hora fim</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
    </div>  
  </div>
  <br>

  
  <div class="row bg-light">
    <div class="col-md-7 col-12">
        <div class="form-check form-switch my-3">
            <label class="form-check-label" for="flexSwitchCheckDefault">Devolve crédito de sessão ao alterar um agendamento antes da antecedência definida</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">          
        </div>

        <div class="form-check form-switch my-3">
            <label class="form-check-label" for="flexSwitchCheckDefault">Comunicar por email os professores de qualquer mudança no agendamento deles</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">          
        </div>

        <div class="form-check form-switch my-3">
            <label class="form-check-label" for="flexSwitchCheckDefault">  Permitir um funcionário agendar no dia para um horário que já passou</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">          
        </div>

        <div class="form-check form-switch my-3">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Permitir alunos APENAS agendar com horário inicial divisível pela duração da atividade</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">          
        </div>

        <div class="form-check form-switch my-3">
            <label class="form-check-label" for="flexSwitchCheckDefault">  Não exibir no comunicado por e-mail a hora final do agendamento</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">          
        </div>

        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">Devolve crédito de sessão ao alterar um agendamento antes da antecedência definida</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">          
        </div>
    </div>

    <div class="col-12 my-md-0 my-3 col-md-5">
        <div class="form-group">
            <label for="mensagem">*Mensagem de alerta por e-mail no agendamento novo</label>
            <textarea name="" class="form-control" id="mensagem" cols="5" rows="10"></textarea>
        </div>
        <div class="form-group my-3">
            <label for="assunto">Assunto do email para alerta de agendamento</label>
            <input type="text" class='form-control'>
        </div>
    </div>
  </div>
</div>