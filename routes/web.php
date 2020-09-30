<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
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

Route::get ( '/',[studentcontroller::class,'index'])->name('index');
Route::post ( '/register', [studentcontroller::class,'register'])->name('register');
Route::get ( '/authenticate',[studentcontroller::class,'authenticate'] )->name('authenticate');
Route::get ( '/logout',[studentcontroller::class,'logout'])->name('logout');
Route::get ( '/ChangePassword',[studentcontroller::class,'ChangePassword'])->name('ChangePassword');
Route::get ( '/updatePasswordpage',[studentcontroller::class,'updatePasswordpage'])->name('updatePasswordpage');
Route::get ( '/teacherRegistration',[studentcontroller::class,'teacherRegistration'])->name('teacherRegistration');
Route::get ( '/studentRegistration',[studentcontroller::class,'studentRegistration'])->name('studentRegistration');


