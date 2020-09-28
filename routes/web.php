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


Route::post('/create','TodoController@create')->name('todo');
Route::delete('/delete/{id}','TodoController@delete')->name('delete');
Route::put('/edit/{id}','TodoController@edit')->name('edit');




Route::group(['middleware' => 'isAdmin'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::group(['middleware' => User], function(){
        
    });
});
Route::get('/users', 'UserController@index');
        Route::get('/user/add', 'UserController@getAdd');
        Route::post('/user/add', 'UserController@postAdd');
        Route::get('/user/edit/{id}', 'UserController@getEdit');
        Route::post('/user/edit/{id}', 'UserController@postEdit');
        Route::get('/user/delete/{id}', 'UserController@delete');

