<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;

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

Route::middleware(['guest'])->group(function () {
    Route::controller(LoginController::class)->group(function () {
        route::get('/login', 'showLoginForm')->name('login');
        route::post('/login', 'login');
    });

    Route::controller(RegisterController::class)->group(function () {
        route::get('/register', 'showRegistrationForm')->name('register');
        route::post('/register', 'register');
    });
});

Route::get('/logout', function () {
    return redirect('/');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('dashboard');

    Route::controller(SearchController::class)->group(function () {
        route::get('/search', 'showSearch')->name('search');
        route::post('/search', 'search');
    });
});
