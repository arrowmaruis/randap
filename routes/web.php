<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    // dd(auth()->user());
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
    // Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
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


use App\Http\Controllers\AdhesionController;

Route::get('/finalize-adhesion/{token}', [AdhesionController::class, 'finalize'])->name('finalize.adhesion');