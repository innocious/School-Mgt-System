<?php

use Illuminate\Http\Request;
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


Route::get('/',[studentcontroller::class,'index'])->name('home');//->middleware('first_name');//hompage
Route::get('/admin',[studentcontroller::class,'admin'])->name('admin');
Route::get('/studentLogin',[studentcontroller::class,'studentLogin'])->name('studentLogin');
Route::get('/teacherLogin',[studentcontroller::class,'teacherLogin'])->name('teacherLogin');
Route::get('/studentpage',[studentcontroller::class,'studentpage'])->name('studentpage');
Route::post('/create',[studentcontroller::class,'create'])->name('student');
Route::delete('/delete/{id}',[studentcontroller::class ,'delete'])->name('delete');
Route::put('/edit/{id}',[studentcontroller::class, 'editstudent'])->name('edit');



