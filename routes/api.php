<?php

use App\Http\Controllers\Api\EventsController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;





Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::post('/events/create', [EventsController::class, 'store'])->name('store');
