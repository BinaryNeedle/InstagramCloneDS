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

Route::controller(LoginController::class)->group(function () {
    route::get('/login', 'showLoginForm')->name('login');
    route::post('/login', 'login');
    route::post('/logout', 'logout')->name('logout');
    route::get('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    route::get('/register', 'showRegistrationForm')->name('register');
    route::post('/register', 'register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', [PagesController::class, 'index'])->name('dashboard');

// fix this
Route::controller(SearchController::class)->group(function () {
    route::get('/search', 'showSearch')->name('search');
    route::post('/search', 'search');
});
