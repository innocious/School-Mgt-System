<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolManagmentController extends Controller
{
    public function index(){
       
        return view('index');// display the queried data in the view
    }
}
