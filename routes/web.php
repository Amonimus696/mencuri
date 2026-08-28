<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/tentang', function () {
    return redirect('/profil');
});

Route::get('/jurusan', function () {
    return view('jurusan');
});

Route::get('/kesiswaan', function () {
    return view('kesiswaan');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

