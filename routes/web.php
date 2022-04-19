<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\President;
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

//Routes for Admin
Route::group(['as' => 'admin.','prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [Admin\AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [Admin\AdminController::class, 'settings'])->name('admin.settings');

    //Sliders
    Route::get('slider', [Admin\SliderController::class, 'slider'])->name('slider');
    Route::get('slider/add', [Admin\SliderController::class, 'add'])->name('add.slider');
    Route::post('slider/store', [Admin\SliderController::class, 'store'])->name('store.slider');
});


//Routes for Presidents
Route::group(['as' => 'president.','prefix' => 'president', 'middleware' => ['isPresident', 'auth']], function () {
    Route::get('dashboard', [President\PresidentController::class, 'index'])->name('dashboard');
    Route::get('profile', [President\PresidentController::class, 'profile'])->name('profile');
    Route::get('settings', [President\PresidentController::class, 'settings'])->name('settings');

    //Sliders
    Route::get('club', [President\ClubController::class, 'index'])->name('club');
    Route::get('club/new', [President\ClubController::class, 'new'])->name('new.club');
    Route::post('club/store', [President\ClubController::class, 'store'])->name('store.club');
});


//Routes for Users
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function () {
    Route::get('dashboard', [User\UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [User\UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [User\UserController::class, 'settings'])->name('user.settings');
});
