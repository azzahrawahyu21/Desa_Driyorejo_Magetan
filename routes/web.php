<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('dashboard');});

// dashboard
Route::get('/dashboard', function () {return view('/dashboard');})->name('dashboard');

// menu
Route::get('/profil', function () {return view('/profil/profil_desa');})->name('profil_desa');
Route::get('/sejarah', function () {return view('/profil/sejarah');})->name('sejarah');
Route::get('/visi', function () {return view('/profil/visimisi');})->name('visimisi');
Route::get('/struktur', function () {return view('/profil/struktur');})->name('struktur_anggota');

// umkm
Route::get('/umkm', function () {return view('/umkm/umkm');})->name('umkm');
Route::get('/umkm_detail', function () {return view('/umkm/umkm_detail');})->name('umkm_detail');

// berita
Route::get('/berita', function () {return view('/berita/berita');})->name('berita');
Route::get('/detail_berita', function () {return view('/berita/berita_detail');})->name('berita_detail');

// llembaga
Route::get('/lembaga/bpd', function () {return view('lembaga.bpd');})->name('bpd');
Route::get('/lembaga/lpmd', function () {return view('lembaga.lpmd');})->name('lpmd');
Route::get('/lembaga/pkk', function () {return view('lembaga.pkk');})->name('pkk');
Route::get('/lembaga/rtrw', function () {return view('lembaga.rtrw');})->name('rtrw');
Route::get('/lembaga/kartar', function () {return view('lembaga.kartar');})->name('kartar');
Route::get('/lembaga/bumdes', function () {return view('lembaga.bumdes');})->name('bumdes');
Route::get('/lembaga/ppid', function () {return view('lembaga.ppid');})->name('ppid');


// coba
Route::get('/responsive', function () {return view('/responsive');})->name('responsive');