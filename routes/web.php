<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('main');

Route::middleware(['guest'])->group(function () {
    Route::post('/reg', [RegController::class, 'reg'])->name('reg');
    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/addOrder', [ProfileController::class, 'addOrder'])->name('addOrder');
});
