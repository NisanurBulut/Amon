<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Settings\SettingsController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register',[AuthController::class, 'register'])->name('auth.register');
Route::post('/register',[AuthController::class, 'registerStore']);

Route::get('/login',[AuthController::class, 'login'])->name('auth.login');
Route::post('/login',[AuthController::class, 'loginStore']);

Route::get('/settings',[SettingsController::class, 'index'])->name('settings.index');
