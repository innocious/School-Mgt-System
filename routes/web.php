<?php

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

Route::get ( '/',[SchoolManagmentController::class,'index'])->name('index');
Route::get ( '/admin',[SchoolManagmentController::class,'admin'])->name('admin');
Route::get ( '/register', [SchoolManagmentController::class,'register'])->name('register');
Route::get ( '/authenticate',[SchoolManagmentController::class,'authenticate'] )->name('authenticate');
Route::get ( '/logout',[SchoolManagmentController::class,'logout'])->name('logout');
Route::get ( '/ChangePassword',[SchoolManagmentController::class,'ChangePassword'])->name('ChangePassword');
Route::get ( '/updatePasswordpage',[SchoolManagmentController::class,'updatePasswordpage'])->name('updatePasswordpage');


// Route::get('/', function () {
//     return view('about');
// });

// Route::get('/', function () {
//     return view('students');
// });

// Route::get('/', function () {
//     return view('registerstudents');
// });





// Route::get('/', function () {
//     return view('landing');
// });

// Route::get('/', function () {
//     return view('homepage');
// });