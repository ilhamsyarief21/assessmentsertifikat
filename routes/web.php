<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;



// Rute otentikasi (login, signup, dan logout)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute dashboard dengan middleware auth
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');


Route::get('/user/login', [CustomAuthController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/user/login', [CustomAuthController::class, 'userLogin']);

Route::get('/signupuser', [CustomAuthController::class, 'showSignupUserForm'])->name('user.signupuser');
Route::post('/signupuser', [CustomAuthController::class, 'signupUser']);

Route::get('/loginuser', function () {
    return view('auth.loginuser');
});


