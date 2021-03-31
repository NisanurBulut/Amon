<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SharedController;
use App\Http\Controllers\Apps\AppsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Demands\DemandsController;
use App\Http\Controllers\Settings\SettingsController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login',[AuthController::class, 'index'])->name('auth.login');
Route::post('/storeLogin',[AuthController::class, 'storeLogin'])->name('auth.store');
Route::get('/storeLogout',[AuthController::class, 'storeLogout'])->name('auth.storeLogout');


Route::get('/settings',[SettingsController::class, 'index'])->name('settings.index');
Route::get('/settings/createStatus',[SettingsController::class, 'createStatus'])->name('settings.createStatus');
Route::post('/settings/storeStatus',[SettingsController::class, 'storeStatus'])->name('settings.storeStatus');
Route::get('/settings/getSituations',[SettingsController::class, 'getSituations'])->name('settings.getSituations');
Route::delete('/settings/destroyStatus/{id}',[SettingsController::class, 'destroyStatus'])->name('settings.destroyStatus');
Route::get('/settings/editStatus/{id}',[SettingsController::class, 'editStatus'])->name('settings.editStatus');
Route::post('/settings/updateStatus/{id}',[SettingsController::class, 'updateStatus'])->name('settings.updateStatus');


Route::get('/settings/createState',[SettingsController::class, 'createState'])->name('settings.createState');
Route::get('/settings/getStates',[SettingsController::class, 'getStates'])->name('settings.getStates');
Route::post('/settings/storeState',[SettingsController::class, 'storeState'])->name('settings.storeState');
Route::delete('/settings/destroyState/{id}',[SettingsController::class, 'destroyState'])->name('settings.destroyState');
Route::get('/settings/editState/{id}',[SettingsController::class, 'editState'])->name('settings.editState');
Route::post('/settings/updateState/{id}',[SettingsController::class, 'updateState'])->name('settings.updateState');



Route::get('/settings/getColors',[SettingsController::class, 'getColors'])->name('settings.getColors');
Route::get('/settings/createColor',[SettingsController::class, 'createColor'])->name('settings.createColor');
Route::post('/settings/storeColor',[SettingsController::class, 'storeColor'])->name('settings.storeColor');
Route::delete('/settings/destroyColor/{id}',[SettingsController::class, 'destroyColor'])->name('settings.destroyColor');
Route::get('/settings/editColor/{id}',[SettingsController::class, 'editColor'])->name('settings.editColor');
Route::post('/settings/updateColor/{id}',[SettingsController::class, 'updateColor'])->name('settings.updateColor');


Route::get('/demands',[DemandsController::class,'index'])->name('demands.index');
Route::get('/demands/createDemand',[DemandsController::class,'createDemand'])->name('demands.createDemand');
Route::post('/demands/storeDemand',[DemandsController::class, 'storeDemand'])->name('demands.storeDemand');
Route::get('/demands/editDemand/{id}',[DemandsController::class, 'editDemand'])->name('demands.editDemand');
Route::post('/demands/updateDemand/{id}',[DemandsController::class, 'updateDemand'])->name('demands.updateDemand');
Route::delete('/demands/destroyDemand/{id}',[DemandsController::class, 'destroyDemand'])->name('demands.destroyDemand');
Route::get('/demands/undertakeDemand/{id}',[DemandsController::class, 'undertakeDemand'])->name('demands.undertakeDemand');


Route::get('/apps',[AppsController::class,'index'])->name('apps.index');
Route::get('/apps/createApp',[AppsController::class, 'createApp'])->name('apps.createApp');
Route::post('/apps/storeApp',[AppsController::class, 'storeApp'])->name('apps.storeApp');
Route::get('/apps/getApps',[AppsController::class, 'getApps'])->name('apps.getApps');
Route::delete('/apps/destroyApp/{id}',[AppsController::class, 'destroyApp'])->name('apps.destroyApp');
Route::get('/apps/editApp/{id}',[AppsController::class, 'editApp'])->name('apps.editApp');
Route::post('/apps/updateApp/{id}',[AppsController::class, 'updateApp'])->name('apps.updateApp');

Route::get('/users',[UsersController::class,'index'])->name('users.index');
Route::get('/users/createUser',[UsersController::class,'createUser'])->name('users.createUser');
Route::post('/users/storeUser',[UsersController::class, 'storeUser'])->name('users.storeUser');
Route::get('/users/editUser/{id}',[UsersController::class, 'editUser'])->name('users.editUser');
Route::post('/users/updateUser/{id}',[UsersController::class, 'updateUser'])->name('users.updateUser');
Route::delete('/users/destroyUser/{id}',[UsersController::class, 'destroyUser'])->name('users.destroyUser');
