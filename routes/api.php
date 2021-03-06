<?php

use App\Http\Controllers\Api\AlertaEmailConfigController;
use App\Http\Controllers\Api\ConfiguracaoAgendaController;
use App\Http\Controllers\Api\EmailConfigController;
use App\Http\Controllers\Api\EventosController;
use App\Http\Controllers\Api\LocalController;
use App\Http\Controllers\Api\OpcoesCadastroAlunoController;
use App\Http\Controllers\Api\OpcoesCadastroFuncionarioController;
use App\Http\Controllers\Api\PermissaoAgendaController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::prefix('local')->group(function () {
    Route::get('/', [LocalController::class, 'index']);
    Route::get('{id}/show', [LocalController::class, 'show']);
    Route::post('/store', [LocalController::class, 'store']);
    Route::put('/{id}/update', [LocalController::class, 'update']);
    Route::delete('/{id}/destroy', [LocalController::class, 'destroy']);
});

Route::prefix('events')->group(function () {
    Route::get('/', [EventosController::class, 'index']);
    Route::get('{id}/create', [EventosController::class, 'create']);
    Route::post('/create', [EventosController::class, 'store']);
    Route::put('/{id}/update', [EventosController::class, 'update']);
    Route::delete('/{id}/destroy', [EventosController::class, 'destroy']);
});



/*CONFIGURAÇÂO API*/

Route::prefix('configuracao')->group(function () {
    Route::get('/', [ConfiguracaoAgendaController::class, 'index']);
    Route::get('{id}/show', [ConfiguracaoAgendaController::class, 'show']);
    Route::post('/store', [ConfiguracaoAgendaController::class, 'store']);
    Route::put('/{id}/update', [ConfiguracaoAgendaController::class, 'update']);
    Route::delete('/{id}/destroy', [ConfiguracaoAgendaController::class, 'destroy']);
});


Route::prefix('permissao')->group(function () {
    Route::get('/', [PermissaoAgendaController::class, 'index']);
    Route::get('{id}/show', [PermissaoAgendaController::class, 'show']);
    Route::post('/store', [PermissaoAgendaController::class, 'store']);
    Route::put('/{id}/update', [PermissaoAgendaController::class, 'update']);
    Route::delete('/{id}/destroy', [PermissaoAgendaController::class, 'destroy']);
});



Route::prefix('alertaemail')->group(function () {
    Route::get('/', [AlertaEmailConfigController::class, 'index']);
    Route::get('{id}/show', [AlertaEmailConfigController::class, 'show']);
    Route::post('/store', [AlertaEmailConfigController::class, 'store']);
    Route::put('/{id}/update', [AlertaEmailConfigController::class, 'update']);
    Route::delete('/{id}/destroy', [AlertaEmailConfigController::class, 'destroy']);
});


Route::prefix('configEmail')->group(function () {
    Route::get('/', [EmailConfigController::class, 'index']);
    Route::get('{id}/show', [EmailConfigController::class, 'show']);
    Route::post('/store', [EmailConfigController::class, 'store']);
    Route::put('/{id}/update', [EmailConfigController::class, 'update']);
    Route::delete('/{id}/destroy', [EmailConfigController::class, 'destroy']);
});


Route::prefix('opcoescadastroaluno')->group(function () {
    Route::get('/', [OpcoesCadastroAlunoController::class, 'index']);
    Route::get('{id}/show', [OpcoesCadastroAlunoController::class, 'show']);
    Route::post('/store', [OpcoesCadastroAlunoController::class, 'store']);
    Route::put('/{id}/update', [OpcoesCadastroAlunoController::class, 'update']);
    Route::delete('/{id}/destroy', [OpcoesCadastroAlunoController::class, 'destroy']);
});


Route::prefix('opcoescadastrofunc')->group(function () {
    Route::get('/', [OpcoesCadastroFuncionarioController::class, 'index']);
    Route::get('{id}/show', [OpcoesCadastroFuncionarioController::class, 'show']);
    Route::post('/store', [OpcoesCadastroFuncionarioController::class, 'store']);
    Route::put('/{id}/update', [OpcoesCadastroFuncionarioController::class, 'update']);
    Route::delete('/{id}/destroy', [OpcoesCadastroFuncionarioController::class, 'destroy']);
});

/*FIM CONFIGURAÇÂO API*/


/*ATIVIDADES*/

Route::prefix('atividades')->group(function () {
    Route::get('/', [AtividadesController::class, 'index']);
    Route::get('{id}/show', [AtividadesController::class, 'show']);
    Route::post('/store', [AtividadesController::class, 'store']);
    Route::put('/{id}/update', [AtividadesController::class, 'update']);
    Route::delete('/{id}/destroy', [AtividadesController::class, 'destroy']);
});

/*FIM ATIVIDADES*/