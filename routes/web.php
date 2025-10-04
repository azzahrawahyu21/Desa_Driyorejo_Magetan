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

Route::get('/visi', function () {
     return view('/profil/visimisi');
 });

Route::get('/struktur', function () {
     return view('/profil/struktur');
 });