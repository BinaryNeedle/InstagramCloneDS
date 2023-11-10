<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::controller(AuthController::class)->group(function () {
    route::any('/login', 'login')->name('login');
    route::any('/register', 'register')->name('register');
    route::any('/logout', 'logout')->name('logout');
});


Route::get('/', [PagesController::class, 'index'])->name('dashboard');

Route::controller(SearchController::class)->group(function () {
    route::get('/search', 'showSearch')->name('search');
    route::post('/search', 'search');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/post/create', 'create')->name('postIndex');
    Route::post('/post/store', 'store')->name('postCreate');
    Route::get('/post/detail/{id}', 'show')->name('postDetail');
    Route::get('/post/edit/{id}', 'edit')->name('postChanges');
    Route::post('/post/update/{id}', 'edit')->name('postUpdate');
    Route::post('/post/delete/{id}', 'edit')->name('postDelete');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/{username}', 'show')->where('username', '^@[A-Za-z0-9._%+-]+$')->name('profileDetail');
    Route::get('/{username}/edit', 'edit')->where('username', '^@[A-Za-z0-9._%+-]+$')->name('profileEdit');
    Route::post('/{username}/edit', 'update')->where('username', '^@[A-Za-z0-9._%+-]+$')->name('profileSetting');
    Route::get('/{username}/setting', 'settingPages')->where('username', '^@[A-Za-z0-9._%+-]+$')->name('profileSetting');
    Route::post('/{username}/setting', 'update')->where('username', '^@[A-Za-z0-9._%+-]+$')->name('profileSetting');
});
