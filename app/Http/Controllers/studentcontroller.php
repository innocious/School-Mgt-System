<?php

namespace App\Http\Controllers;


use App\student;
use Illuminate\Http\Request;
use App\Http\Request\studentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function compact;
use function dd;
use function dump;
use function redirect;
use function view;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //  $Students = student::all();
        //  return view('main.homepage', compact('Students'));
        //$Data = DB::table('mystudent')->get();//query database get tabuar data

        $Data = $request; 
        $array = ['name'=>$Data];
        return view('main.homepage', $array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   

        $this->validate($request,[ "first_name"=>"required", "middle_name"=>"required", "last_name"=>"required", "department"=>"required", "password"=>"required"  ]); //Validates the Request

        $firstName = $request->first_name; 
        $middleName = $request->middle_name;
        $lastName = $request->last_name;
        $department = $request->department;
        $password = $request->password;

        DB::table('myst')->insert([ "first_name"=>$firstName, "middle_name"=> $middleName, "last_name"=> $lastName, "department"=> $department, "password"=> $password]);

        return redirect::back()->with('status','working');//if working set status ok

    }

    // public function login(){
    //       return view('main.login');
    //   }

    public function admin(){
         
       return view('main.admin');
       
    }

    public function studentpage(){
        $Data = DB::table('myst')->get();
        return view('main.login', compact('Data'));
      //  return view('main.login');
    }

    // public function renderStudentData(){
    //      $Data = DB::table('myst')->get();
    //      return view('main.login', compact('Data'));
    // }

    public function studentLogin(){
        return view('main.studentView');
    }

    public function teacherLogin(){
        return view('main.teacherView');
    }


    public function delete($id){
        DB::table('myst')->where('id','=', $id)->delete(); //delete selected data by its id
        return redirect('/'); //Return to root directory
      }


      //edit
      public function editstudent(Request $request, $id){

        $name = $request->name; 
        $email = $request->email;
        $descr = $request->description;

          DB::table('employees')->where('id','=', $id)->update(['name' =>$name, 'email' => $email , 'description'=>$descr]);
          return redirect('/');
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
