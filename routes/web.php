<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('appointment.index');
});

Route::get('/config', function () {
    return view('appointment.config');
});



