<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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


Route::view('add','users');
Route::post('add',[Users::class,'addData']);
Route::get('view',[Users::class,'view']);
Route::get('delete/{id}',[Users::class,'delete']);
Route::get('update/{id}',[Users::class,'showData']);
Route::post('update',[Users::class,'update']);


?>
