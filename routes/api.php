<?php

use App\Http\Controllers\Api\EventosController;
use App\Http\Controllers\Api\EventsController;
use App\Http\Controllers\Api\LocalController;
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
    Route::get('{id}/show', [EventosController::class, 'show']);
    Route::post('/create', [EventosController::class, 'store']);
    Route::put('/{id}/update', [EventosController::class, 'update']);
    Route::delete('/{id}/destroy', [EventosController::class, 'destroy']);
});

