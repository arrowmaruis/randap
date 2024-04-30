<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ActualityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', [JobController::class, 'index'])->name('job.index');
Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');
Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('/actuality', [ActualityController::class, 'index'])->name('actuality.index');
Route::get('/chat', [AccountController::class, 'chat'])->name('account.chat');

