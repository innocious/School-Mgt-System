<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function compact;
use function dd;
use function dump;
use function redirect;
use function view;

class TodoController extends Controller
{
    //index
    public function index(){
        $todos = todo::all(); //query database get tabuar data

        return view('todo',compact('todos'));// display the queried data in the view
    }
      

    //delet
    public function delete($id){
        DB::table('todos')->where('id','=', $id)->delete(); //delete selected data by its id
        return redirect('/'); //Return to root directory
    }


    //edit
    public function edit(Request $request, $id){
        DB::table('todos')->where('id','=', $id)->update(['name' => $request->name, 'description'=>$request->description]);
        return redirect('/');
    }


    //create
    public function create(Request $request){

        $this->validate($request,[ "name"=>"required", "description"=>"required" ]); //Validates the Request


       $todo = new todo(); //Create a new table in DataBase called todo

       $todo->name = $request->input('name'); //Creates name colomn in  toda Table DataBase 
       $todo->description = $request->input('description');//Creates description colomn in  toda Table DataBase

       $todo->save();//Save changes applied to todos table



       return redirect::back()->with('status','working');//if working set status ok
    }
}

