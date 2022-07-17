<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [Admin\HomePageController::class, 'show'])->name('/');

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('club/view/{id}', [User\ClubController::class, 'view'])->name('club.view');

//Routes for Auth Users
Route::group(['middleware' => ['auth', 'verified']], function () {
    //PayPal Payment
    Route::get('pay/{club_id}/{description}/{amount}', [Controllers\PaymentController::class, 'pay'])->name('payment');
    Route::get('success', [Controllers\PaymentController::class, 'success']);
    Route::get('error', [Controllers\PaymentController::class, 'error']);

    //Payment Method Handler
    Route::post('payment_method/{id}', [Controllers\PaymentMethodHandlerController::class, 'paymentMethod'])->name('payment_method');
});

//Routes for Admin
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'verified']], function () {
    Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('profile', [Admin\AdminController::class, 'profile'])->name('profile');
    Route::put('update', [Admin\AdminController::class, 'update'])->name('profile.update');
    Route::put('change/password', [Admin\AdminController::class, 'ChangePassword'])->name('password.change');
    Route::put('change/email', [Admin\AdminController::class, 'ChangeEmail'])->name('email.change');
    Route::get('settings', [Admin\AdminController::class, 'settings'])->name('settings');

    //Statements
    Route::get('statement', [Admin\StatementController::class, 'index'])->name('statement.index');
    Route::post('statement/store', [Admin\StatementController::class, 'store'])->name('statement.store');
    Route::put('statement/{id}/update', [Admin\StatementController::class, 'update'])->name('statement.update');

    //Sliders
    Route::get('slider', [Admin\SliderController::class, 'slider'])->name('slider');
    Route::get('slider/add/{id}', [Admin\SliderController::class, 'add'])->name('slider.add');
    Route::get('slider/remove/{id}', [Admin\SliderController::class, 'remove'])->name('slider.remove');

    //Presidents
    Route::get('president', [Admin\PresidentController::class, 'index'])->name('president.index');
    Route::get('president/create', [Admin\PresidentController::class, 'create'])->name('president.create');
    Route::post('president/store', [Admin\PresidentController::class, 'store'])->name('president.store');
    Route::get('president/{id}/edit/', [Admin\PresidentController::class, 'edit'])->name('president.edit');
    Route::put('president/{id}/update', [Admin\PresidentController::class, 'update'])->name('president.update');
    Route::delete('president/{id}', [Admin\PresidentController::class, 'destroy'])->name('president.destroy');
    Route::get('president/search', [Admin\PresidentController::class, 'search'])->name('president.search');

    //Members
    Route::get('member', [Admin\MemberController::class, 'index'])->name('member.index');
    Route::get('member/create', [Admin\MemberController::class, 'create'])->name('member.create');
    Route::post('member/store', [Admin\MemberController::class, 'store'])->name('member.store');
    Route::get('member/{id}/edit/', [Admin\MemberController::class, 'edit'])->name('member.edit');
    Route::put('member/{id}/update', [Admin\MemberController::class, 'update'])->name('member.update');
    Route::delete('member/{id}', [Admin\MemberController::class, 'destroy'])->name('member.destroy');
    Route::get('member/search', [Admin\MemberController::class, 'search'])->name('member.search');

    //Clubs
    Route::get('club', [Admin\ClubController::class, 'index'])->name('club.index');
    Route::get('club/{id}/approval/', [Admin\ClubController::class, 'approval'])->name('club.approval');
    Route::get('club/{id}/rejection/', [Admin\ClubController::class, 'rejection'])->name('club.rejection');
    Route::delete('club/{id}', [Admin\ClubController::class, 'destroy'])->name('club.destroy');
    Route::get('club/search', [Admin\ClubController::class, 'search'])->name('club.search');

    //club-categories
    Route::get('category', [Admin\ClubCategoryController::class, 'index'])->name('category.index');
    Route::post('category/store', [Admin\ClubCategoryController::class, 'store'])->name('category.store');
    Route::get('category/{id}/edit/', [Admin\ClubCategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/{id}/update', [Admin\ClubCategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{id}', [Admin\ClubCategoryController::class, 'destroy'])->name('category.destroy');

    //History-logs
    Route::get('history-logs', [Admin\HistroyLogsController::class, 'index'])->name('history-logs.index');

    //Notifications
    Route::get('notification/read-all', [Admin\NotificationController::class, 'readAll'])->name('notification.read-all');
});


//Routes for Presidents
Route::group(['as' => 'president.', 'prefix' => 'president', 'middleware' => ['isPresident', 'auth', 'verified']], function () {
    Route::get('dashboard', [President\PresidentController::class, 'index'])->name('dashboard');
    Route::get('profile', [President\PresidentController::class, 'profile'])->name('profile');
    Route::put('update', [President\PresidentController::class, 'update'])->name('profile.update');
    Route::put('change/password', [President\PresidentController::class, 'ChangePassword'])->name('password.change');
    Route::put('change/email', [President\PresidentController::class, 'ChangeEmail'])->name('email.change');
    Route::get('settings', [President\PresidentController::class, 'settings'])->name('settings');

    //Clubs
    Route::get('club', [President\ClubController::class, 'index'])->name('club.index');
    Route::get('club/create', [President\ClubController::class, 'create'])->name('club.create');
    Route::post('club/store', [President\ClubController::class, 'store'])->name('club.store');
    Route::get('club/{id}/edit/', [President\ClubController::class, 'edit'])->name('club.edit');
    Route::put('club/{id}/update', [President\ClubController::class, 'update'])->name('club.update');
    Route::delete('club/{id}', [President\ClubController::class, 'destroy'])->name('club.destroy');

    //Club Image Sliders
    Route::get('club/slider/image', [President\ClubSliderImageController::class, 'index'])->name('slider.image.index');
    Route::post('club/slider/image/store', [President\ClubSliderImageController::class, 'store'])->name('slider.image.store');
    Route::put('club/slider/image/{id}/update', [President\ClubSliderImageController::class, 'update'])->name('slider.image.update');

    //Events
    Route::get('event', [President\EventController::class, 'index'])->name('event.index');
    Route::get('event/create', [President\EventController::class, 'create'])->name('event.create');
    Route::post('event/store', [President\EventController::class, 'store'])->name('event.store');
    Route::get('event/{id}/edit/', [President\EventController::class, 'edit'])->name('event.edit');
    Route::put('event/{id}/update', [President\EventController::class, 'update'])->name('event.update');
    Route::delete('event/{id}', [President\EventController::class, 'destroy'])->name('event.destroy');

    //Notices
    Route::get('notice', [President\NoticeController::class, 'index'])->name('notice.index');
    Route::get('notice/create', [President\NoticeController::class, 'create'])->name('notice.create');
    Route::post('notice/store', [President\NoticeController::class, 'store'])->name('notice.store');
    Route::get('notice/{id}/edit/', [President\NoticeController::class, 'edit'])->name('notice.edit');
    Route::put('notice/{id}/update', [President\NoticeController::class, 'update'])->name('notice.update');
    Route::get('notice/{id}/publish', [President\NoticeController::class, 'publish'])->name('notice.publish');
    Route::delete('notice/{id}', [President\NoticeController::class, 'destroy'])->name('notice.destroy');


    //Members
    Route::get('members', [President\MemberController::class, 'index'])->name('members.index');
    Route::get('members/{id}/edit/', [President\MemberController::class, 'edit'])->name('members.edit');
    Route::delete('members/{id}', [President\MemberController::class, 'destroy'])->name('members.destroy');
    Route::get('member/search', [President\MemberController::class, 'search'])->name('member.search');

    //Meetings
    Route::get('meeting', [President\MeetingController::class, 'index'])->name('meeting.index');
    Route::get('meeting/create', [President\MeetingController::class, 'create'])->name('meeting.create');
    Route::post('meeting/store', [President\MeetingController::class, 'store'])->name('meeting.store');
    Route::get('meeting/{id}/edit/', [President\MeetingController::class, 'edit'])->name('meeting.edit');
    Route::put('meeting/{id}/update', [President\MeetingController::class, 'update'])->name('meeting.update');
    Route::get('meeting/{id}/publish', [President\MeetingController::class, 'publish'])->name('meeting.publish');
    Route::get('meeting/{id}/draft', [President\MeetingController::class, 'draft'])->name('meeting.draft');
    Route::delete('meeting/{id}', [President\MeetingController::class, 'destroy'])->name('meeting.destroy');

    //History-logs
    Route::get('history-logs', [President\HistroyLogsController::class, 'index'])->name('history-logs.index');

    //Notifications
    Route::get('notification/read-all', [President\NotificationController::class, 'readAll'])->name('notification.read-all');
});


//Routes for Users
Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['isUser', 'auth', 'verified']], function () {
    Route::get('dashboard', [User\UserController::class, 'index'])->name('dashboard');
    Route::get('profile', [User\UserController::class, 'profile'])->name('profile');
    Route::put('profile/update', [User\UserController::class, 'update'])->name('profile.update');
    Route::put('change/password', [User\UserController::class, 'ChangePassword'])->name('password.change');
    Route::put('change/email', [User\UserController::class, 'ChangeEmail'])->name('email.change');
    Route::get('settings', [User\UserController::class, 'settings'])->name('settings');

    //club
    Route::get('club/register/{id}', [User\ClubController::class, 'register'])->name('club.register')->middleware('isPaidMembershipFee');

    //payment
    Route::get('club/payment_page/{id}', [User\ClubController::class, 'payment_page'])->name('club.payment_page');

    //meeting
    Route::get('club/{id}/upcoming-meetings/all', [User\MeetingController::class, 'all'])->name('upcoming-meetings.all');
});
