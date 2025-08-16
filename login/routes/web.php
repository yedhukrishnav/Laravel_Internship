<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomAuthController;


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
Route::group(['middleware' => 'PreventBH'],function(){

Route::get('registration',[CustomAuthController::class,'registration']);
Route::post('register-user',[CustomAuthController::class,'Registeruser'])->name('reguser');
Route::get('login',[CustomAuthController::class,'login']);
Route::post('login-user',[CustomAuthController::class,'Loginuser'])->name('loginuser');

Route::get('/dashboard',[CustomAuthController::class,'dashboard']);


Route::get('/logout',[CustomAuthController::class,'logout']);
});