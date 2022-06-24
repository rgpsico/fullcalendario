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

})