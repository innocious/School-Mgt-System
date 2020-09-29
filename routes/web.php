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


Route::get('/','studentcontroller@index')->name('home')->middleware('first_name');//hompage
Route::get('/admin','studentcontroller@admin')->name('admin');
Route::get('/studentLogin','studentcontroller@studentLogin')->name('studentLogin');
Route::get('/teacherLogin','studentcontroller@teacherLogin')->name('teacherLogin');
Route::get('/studentpage','studentcontroller@studentpage')->name('studentpage');
Route::post('/create','studentcontroller@create')->name('student');
Route::delete('/delete/{id}','studentcontroller@delete')->name('delete');
Route::put('/edit/{id}','studentcontroller@editstudent')->name('edit');



















