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
    return view('index'); // Zobrazuje `resources/views/index.blade.php`
});

Route::get('/about-me', function () {
    return view('aboutMe'); // Zobrazuje `resources/views/aboutMe.blade.php`
});

Route::get('/portfolio', function () {
    return view('portfolio'); // Zobrazuje `resources/views/portfolio.blade.php`
});

