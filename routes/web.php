<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('profil');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/jurusan', function () {
    return view('jurusan_detail', ['id' => 1]);
});

Route::get('/jurusan/{id}', function ($id) {
    return view('jurusan_detail', ['id' => $id]);
});

Route::get('/kesiswaan', function () {
    return view('kesiswaan');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita/{id}', function ($id) {
    return view('berita_detail', ['id' => $id]);
});

Route::get('/ppdb', function () {
    return view('ppdb');
});
