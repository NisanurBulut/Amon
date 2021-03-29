<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Demands\DemandsController;
use App\Http\Controllers\Settings\SettingsController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register',[AuthController::class, 'register'])->name('auth.register');
Route::post('/register',[AuthController::class, 'registerStore']);

Route::get('/login',[AuthController::class, 'login'])->name('auth.login');
Route::post('/login',[AuthController::class, 'loginStore']);

Route::get('/settings',[SettingsController::class, 'index'])->name('settings.index');
Route::get('/settings/createStatus',[SettingsController::class, 'createStatus'])->name('settings.createStatus');
Route::get('/settings/createState',[SettingsController::class, 'createState'])->name('settings.createState');
Route::get('/settings/createColor',[SettingsController::class, 'createColor'])->name('settings.createColor');
Route::get('/settings/getColors',[SettingsController::class, 'getColors'])->name('settings.getColors');
Route::post('/settings/storeColor',[SettingsController::class, 'storeColor'])->name('settings.storeColor');
Route::get('/settings/getStates',[SettingsController::class, 'getStates'])->name('settings.getStates');
Route::get('/settings/getSituations',[SettingsController::class, 'getSituations'])->name('settings.getSituations');


Route::get('/demands/create',[DemandsController::class,'create'])->name('demands.create');
Route::get('/demands',[DemandsController::class,'index'])->name('demands.index');
