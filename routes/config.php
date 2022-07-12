<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

Route::get('/', function () {
    return view('appointment.index');
});



Route::get('/config', function () {
    return view('config.template');
});

Route::get('/config/agenda', function () {
    return view('config.agenda');
});

Route::get('/config/alerta', function () {
    return view('config.alertaAgendamento');
});

Route::get('/config/email', function () {
    return view('config.configEmail');
});

Route::get('/config/cadastroAluno', function () {
    return view('config.permissoes.cadastroAluno');
});

Route::get('/config/cadastroFuncionario', function () {
    return view('config.permissoes.cadastroFuncionario');
});










