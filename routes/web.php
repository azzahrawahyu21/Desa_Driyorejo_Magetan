<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

// menu
Route::get('/dashboard', function () {return view('/dashboard');});
Route::get('/visi', function () {return view('/profil/visimisi');});
Route::get('/struktur', function () {return view('/profil/struktur');});

// llembaga
Route::get('/lembaga/bpd', function () {return view('lembaga.bpd');})->name('bpd');
Route::get('/lembaga/lpmd', function () {return view('lembaga.lpmd');})->name('lpmd');
Route::get('/lembaga/pkk', function () {return view('lembaga.pkk');})->name('pkk');
Route::get('/lembaga/rtrw', function () {return view('lembaga.rtrw');})->name('rtrw');
Route::get('/lembaga/kartar', function () {return view('lembaga.kartar');})->name('kartar');
Route::get('/lembaga/bumdes', function () {return view('lembaga.bumdes');})->name('bumdes');
Route::get('/lembaga/ppid', function () {return view('lembaga.ppid');})->name('ppid');
Route::get('/lembaga/ppid/isb', function () {return view('lembaga.isb');})->name('isb');
