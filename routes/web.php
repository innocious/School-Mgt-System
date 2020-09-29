<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentManController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[StudentManController::class,'index'])->name('schoolMan');

// Route::get('/registration', function(){
//     dd('bingo');
// });

