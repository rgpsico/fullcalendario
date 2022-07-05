<?php

use App\Http\Controllers\Api\EventsController;
use App\Http\Controllers\Api\LocalController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;





Route::get('/events', [EventsController::class, 'index'])->name('event.index');
Route::post('/events/create', [EventsController::class, 'store'])->name('event.store');
Route::patch('/events/update/{id}', [EventsController::class, 'update'])->name('event.update');
Route::delete('/event/destroy/{id}', [EventsController::class, 'destroy'])->name('event.destroy');


Route::get('/local', [LocalController::class, 'index']);
Route::post('/local/store', [LocalController::class, 'store']);