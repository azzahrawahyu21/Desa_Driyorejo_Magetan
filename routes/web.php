<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/bpd', function () {
    return view('/lembaga/bpd');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
});
