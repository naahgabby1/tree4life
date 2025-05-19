<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthmodelController;
use App\Http\Controllers\SystemuserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Session\Middleware\StartSession;

// Authentications
Route::get('login', [AuthmodelController::class, 'index'])->name('login');
Route::post('login', [AuthmodelController::class, 'auth_login'])->name('login.authentication.submit');
Route::post('logout', [AuthmodelController::class, 'auth_logout'])->name('logout.user.submit');



Route::middleware('auth:loginguard')->group(function(){

// Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Users
Route::get('system-users', [SystemuserController::class, 'index'])->name('user.list.page');
Route::post('save-user', [SystemuserController::class, 'save_user'])->name('save.user.submit');
Route::put('update-user/{id}', [SystemuserController::class, 'update_user'])->name('update.user.submit');
Route::put('reset-user', [SystemuserController::class, 'reset_user'])->name('reset.user.submit');
Route::delete('delete-user/{id}', [SystemuserController::class, 'destroy_user'])->name('delete.user.submit');
Route::get('user-profile', [SystemuserController::class, 'user_profile'])->name('system.user.profile');
Route::get('filtertoreset/{id}', [SystemuserController::class, 'reset_todefault']);
});
