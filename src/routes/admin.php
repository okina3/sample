<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TrashedContactController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WarningUsersController;
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

// Route::get('/', function () {
//     return view('admin.welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard');

Route::middleware('auth:admin')->group(function () {
    // ユーザーの管理画面
    Route::controller(UsersController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/destroy', 'destroy')->name('destroy');
    });

    // 問い合わせ画面
    Route::controller(ContactController::class)->prefix('contact')->group(function () {
        Route::get('/', 'index')->name('contact.index');
        Route::get('show/{contact}', 'show')->name('contact.show');
        Route::delete('/destroy', 'destroy')->name('contact.destroy');
    });

    //ソフトデリートした問い合わせの画面
    Route::controller(TrashedContactController::class)->prefix('trashed-contact')->group(function () {
        Route::get('/', 'index')->name('trashed-contact.index');
        Route::patch('/undo', 'undo')->name('trashed-contact.undo');
        Route::delete('/destroy', 'destroy')->name('trashed-contact.destroy');
    });

    // 警告されたユーザーの管理画面
    Route::controller(WarningUsersController::class)->prefix('warning')->group(function () {
        Route::get('/', 'index')->name('warning.index');
        Route::patch('/undo', 'undo')->name('warning.undo');
        Route::delete('/destroy', 'destroy')->name('warning.destroy');
    });
});

//auth.phpの認証関連のルーティング
Route::middleware('guest')->group(function () {
    // Route::get('register', [RegisteredUserController::class, 'create'])
    //     ->name('register');

    // Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
