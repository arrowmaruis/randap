<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ActivityController;

use App\Http\Controllers\AdhesionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ActualityController;


Route::get('/', function () {
   
    return view('welcome');
})->name('welcome');

//  Routes accessibles uniquement aux utilisateurs connectés
Route::middleware(['auth'])->group(function () {
    Route::get('/job', [JobController::class, 'index'])->name('job.index');
    Route::get('/job/{id_job}', [JobController::class, 'details'])->name('job.details');
    Route::get('/chat', [AccountController::class, 'chat'])->name('account.chat');
    Route::get('/yearbook', [AccountController::class, 'yearbook'])->name('account.yearbook');
    Route::get('/account', [AccountController::class, 'account'])->name('account.index');
    Route::get('/user-profile', [AccountController::class, 'userProfile'])->name('account.user-profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Routes accessibles uniquement aux utilisateurs non connectés
Route::middleware(['guest'])->group(function () {
    Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');
    Route::get('/password-reset', [AuthController::class, 'PassReset'])->name('auth.reste');
    Route::get('/reset-password/{token}', [AuthController::class, 'PasswordReset'])
    ->where('token', '[A-Za-z0-9\.\-\/]+')
    ->name('password.reset');

    Route::get('/adhesion-form', [AuthController::class, 'adhesionForm'])->name('auth.adhesionForm');
});

// Routes accessibles à tous les utilisateurs
Route::get('/actuality', [ActualityController::class, 'index'])->name('actuality.index');
Route::get('/activity', [ActivityController::class, 'index'])->name('activity.index');
Route::get('/activity', [ActivityController::class, 'projet'])->name('activity.projet');
Route::get('/about', [ActualityController::class, 'about'])->name('about.index');
Route::get('/donation', [DonationController::class, 'index'])->name('donation');
Route::get('/projet', [ActualityController::class, 'projet'])->name('about.projet');
Route::get('/actuality/{id_article}', [ActualityController::class, 'details'])->name('actuality.details');



Route::get('/finalize-adhesion/{token}', [AdhesionController::class, 'finalize'])->name('finalize.adhesion');