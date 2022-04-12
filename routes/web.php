<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\User;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [Admin\AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [Admin\AdminController::class, 'settings'])->name('admin.settings');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function () {
    Route::get('dashboard', [User\UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [User\UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [User\UserController::class, 'settings'])->name('user.settings');
});
