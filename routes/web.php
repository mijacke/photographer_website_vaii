<?php

use App\Http\Controllers\ProfileController;
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

// Verejne dostupné stránky
Route::get('/', function () {
    return view('index'); // Tvoja domovská stránka
})->name('home');

Route::get('/portfolio', function () {
    return view('portfolio'); // Portfolio stránka
})->name('portfolio');

Route::get('/about-me', function () {
    return view('aboutMe'); // O mne stránka
})->name('aboutMe');

// Login trasa
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Logout trasa
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// Chránené stránky (vyžaduje prihlásenie)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Dashboard
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Zahrnutie autentifikačných ciest (bez registrácie)
require __DIR__.'/auth.php';
