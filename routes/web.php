<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
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
    Route::get('/logOut', [ProfileController::class, 'logOut'])->name('logOut');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/sort', [ProfileController::class, 'sort'])->name('sort');
    Route::post('/addOrder', [ProfileController::class, 'addOrder'])->name('addOrder');
    // Route::post('/profile/update', [ProfileController::class, 'update'])->name('update');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::post('/addComment', [AdminController::class, 'addComment'])->name('addComment');
    Route::post('/addImg', [AdminController::class, 'addImg'])->name('addImg');
    Route::get('/DelCat/{id}', [AdminController::class, 'DelCat'])->name('DelCat');
    Route::post('/addCat', [AdminController::class, 'addCat'])->name('addCat');
});
