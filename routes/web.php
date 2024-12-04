<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route pre úvodnú stránku (index)
Route::get('/', function () {
    return view('index');
});

// Route pre About Me stránku
Route::get('/about-me', function () {
    return view('aboutMe');
});

// Route pre Portfolio stránku
Route::get('/portfolio', function () {
    return view('portfolio');
});
