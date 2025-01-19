<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/selesai', function () {
    return view('selesai');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/laravel', function () {
    return view('tampilan');
});

Route::get('tem/master', function () {
    return view('template/master');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/index', function () {
    return view('index');
});