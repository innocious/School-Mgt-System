<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolManagmentController;

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


Route::get('/',[SchoolManagmentController::class,'index'])->name('SchoolManagment');


// Route::post('/create','TodoController@create')->name('todo');
// Route::delete('/delete/{id}','TodoController@delete')->name('delete');
// Route::put('/edit/{id}','TodoController@edit')->name('edit');



