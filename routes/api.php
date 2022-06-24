<?php

use App\Http\Controllers\Api\EventsController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;





Route::get('/events', [EventsController::class, 'index'])->name('calendar.index');
Route::post('/events/create', [EventsController::class, 'store'])->name('calendar.store');
Route::patch('/events/update/{id}', [EventsController::class, 'update'])->name('calendar.update');
Route::delete('/events/destroy/{id}', [EventsController::class, 'destroy'])->name('calendar.destroy');
