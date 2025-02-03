<?php

use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\CastController;


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

Route::get('/cast', function () {
    return view('template/separate/cast');
});



//route untuk menampilkan form tambah genre
// dan handlernya / method yang digunakan adalah method create

// Route Untuk mengelola GenreController
Route::controller(GenreController::class)->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
    Route::get('/genre/create', 'create')->name('genre.create');
    Route::post('/genre', 'store')->name('genre.store');
    Route::get('/genre/{id}', 'show')->name('genre.show');
    Route::get('/genre/{id}/edit', 'edit')->name('genre.edit');
    Route::put('/genre/{id}', 'update')->name('genre.update');
    Route::delete('/genre/{id}', 'delete')->name('genre.delete');
});

Route::controller(CastController::class)->group(function(){
    Route::get('/cast/create', 'create')->name('cast.create');
    Route::post('/cast', 'store')->name('cast.store');
    // untuk menampilkan data cast
    Route::get('/cast', 'index')->name('cast.index');
    // menampilkan form edit
    Route::get('/cast/{id}/edit', 'edit')->name('cast.edit');
    // menampilkan proses data ke database
    Route::put('/cast/{id}', 'update')->name('cast.update');
    // delete data di table cast berdasarkan ID
    Route::delete('/cast/{id}', 'delete')->name('cast.delete');
});