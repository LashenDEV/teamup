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
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('profile', [Admin\AdminController::class, 'profile'])->name('profile');
    Route::get('settings', [Admin\AdminController::class, 'settings'])->name('settings');

    //Sliders
    Route::get('slider', [Admin\SliderController::class, 'slider'])->name('slider');
    Route::get('slider/add', [Admin\SliderController::class, 'add'])->name('add.slider');
    Route::post('slider/store', [Admin\SliderController::class, 'store'])->name('store.slider');
});


//Routes for Presidents
Route::group(['as' => 'president.', 'prefix' => 'president', 'middleware' => ['isPresident', 'auth']], function () {
    Route::get('dashboard', [President\PresidentController::class, 'index'])->name('dashboard');
    Route::get('profile', [President\PresidentController::class, 'profile'])->name('profile');
    Route::get('settings', [President\PresidentController::class, 'settings'])->name('settings');

    //Clubs
    Route::get('club', [President\ClubController::class, 'index'])->name('club.index');
    Route::get('club/create', [President\ClubController::class, 'create'])->name('club.create');
    Route::post('club/store', [President\ClubController::class, 'store'])->name('club.store');
    Route::get('club/{id}/edit/', [President\ClubController::class, 'edit'])->name('club.edit');
    Route::put('club/{id}/update', [President\ClubController::class, 'update'])->name('club.update');
    Route::delete('club/{id}', [President\ClubController::class, 'destroy'])->name('club.destroy');

    //Events
    Route::get('event', [President\EventController::class, 'index'])->name('event.index');
    Route::get('event/create', [President\EventController::class, 'create'])->name('event.create');
    Route::post('event/store', [President\EventController::class, 'store'])->name('event.store');
    Route::get('event/{id}/edit/', [President\EventController::class, 'edit'])->name('event.edit');
    Route::put('event/{id}/update', [President\EventController::class, 'update'])->name('event.update');
    Route::delete('event/{id}', [President\EventController::class, 'destroy'])->name('event.destroy');

    //Members
    Route::get('members', [President\MemberController::class, 'index'])->name('members.index');
    Route::get('members/{id}/edit/', [President\MemberController::class, 'edit'])->name('members.edit');
    Route::delete('members/{id}', [President\MemberController::class, 'destroy'])->name('members.destroy');

    //Meetings
    Route::get('meeting', [President\MeetingController::class, 'index'])->name('meeting.index');
    Route::get('meeting/create', [President\MeetingController::class, 'create'])->name('meeting.create');
    Route::post('meeting/store', [President\MeetingController::class, 'store'])->name('meeting.store');
    Route::get('meeting/{id}/edit/', [President\MeetingController::class, 'edit'])->name('meeting.edit');
    Route::put('meeting/{id}/update', [President\MeetingController::class, 'update'])->name('meeting.update');
    Route::get('meeting/{id}/publish', [President\MeetingController::class, 'publish'])->name('meeting.publish');
    Route::delete('meeting/{id}', [President\MeetingController::class, 'destroy'])->name('meeting.destroy');
});


//Routes for Users
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function () {
    Route::get('dashboard', [User\UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [User\UserController::class, 'profile'])->name('user.profile');
    Route::put('update', [User\UserController::class, 'update'])->name('profile.update');
    Route::put('change-password',[User\UserController::class, 'ChangePassword'])->name('password.change');
    Route::get('settings', [User\UserController::class, 'settings'])->name('user.settings');
});
