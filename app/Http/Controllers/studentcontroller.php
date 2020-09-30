<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class studentcontroller extends Controller
{ 

    public function index(){
      return view('landing');  
    }

    public function teacherRegistration(){
        return view('main.teacherRegistration');
    }

    public function studentRegistration(){
        return view('main.registerStudent');
    }

    public function register(Request $request) {
        $request->validate([
           'name'=>'required',
           'email'=>'required',
           'password'=>'required',
        ]);
       
 
      try {
 
 
         $user = new User();
         $user->name = $request->get( 'name' );
         $user->email = $request->get( 'email' );
         $user->password = Hash::make ( $request->get ( 'password' ) );
         $user->role = $request->get( 'role' );
         $user->user_role = "1";
         $user->save();
       
        // return redirect( '/' );
       
        }
         catch (\Exception $e) { // It's actually a QueryException but this works too
             if ($e->getCode() == 23000) {
                 // Deal with duplicate key error 
                 echo "This Student already Exist"; 
             }
          }
     }
 
 
       /**
     * Handle an authentication attempt
     * 
     * @param \illuminate\Http\Request $request 
     * 
     * @return Response
     */

    public function authenticate(Request $request)
    {  
      

        $credentials = $request->only('email','password');
           

        if(Auth::once($credentials)){
            //Authentication passed..

           $role = User::select("role")->where("email","LIKE", "$request->email","AND","name","LIKE", "$request->name")->get();
          
          foreach($role as $user_role){
           if($user_role->role=="Admin"){
              // $user = Records::select("name")->where("name","LIKE", "$request->email")->get();
               $user = User::all();
               return view('main.admin', compact('user'));
           }
           elseif($user_role->role=="Teacher"){
              // $user = Product::select()->where("name","LIKE", "$request->email")->get();
              $user = User::all();
              return view('main.teacherView', compact('user'));
           }
           elseif($user_role->role=="Student"){
              // $user = Product::select()->where("name","LIKE", "$request->email")->get();
              $user = User::all();
              return view('main.studentView', compact('user'));
           }
           else{
                echo "something just went wrong";
           }
       } 
        }else{
            echo "Not authenticated";
   }
         
        
    }

///////////////////////////////////////////////////////////////////////////////////////
    public function logout() {
       //Session::flush ();
       Auth::logout();
       return redirect('/');
   }
   
//////////////////////////////////////////////////////////////////////////////////////   
   public function updatePasswordpage(){
       return view('Body.ResetPassword');
   }


//////////////////////////////////////////////////////////////////////////////////////
   public function ChangePassword(Request $request)
   {
       $request->validate([
           'email'=>'required',
           'password'=>'required',
       ]);


       $user = User::where('email',$request->email)->update(['password'=>Hash::make($request->password)]);
       if($user){
           echo "yor passwor has been changed successfully";
       }
    }













    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index(Request $request)
    // {   
    //     //  $Students = student::all();
    //     //  return view('main.homepage', compact('Students'));
    //     //$Data = DB::table('mystudent')->get();//query database get tabuar data

    //     $Data = $request; 
    //     $array = ['name'=>$Data];
    //     return view('main.homepage', $array);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(Request $request)
    // {   

    //     $this->validate($request,[ "first_name"=>"required", "middle_name"=>"required", "last_name"=>"required", "department"=>"required", "password"=>"required"  ]); //Validates the Request

    //     $firstName = $request->first_name; 
    //     $middleName = $request->middle_name;
    //     $lastName = $request->last_name;
    //     $department = $request->department;
    //     $password = $request->password;

    //     DB::table('myst')->insert([ "first_name"=>$firstName, "middle_name"=> $middleName, "last_name"=> $lastName, "department"=> $department, "password"=> $password]);

    //     return redirect::back()->with('status','working');//if working set status ok

    // }

  

    // public function admin(){
         
    //    return view('main.admin');
       
    // }

    // public function studentpage(){
    //     $Data = DB::table('myst')->get();
    //     return view('main.login', compact('Data'));
    //   //  return view('main.login');
    // }

    // // public function renderStudentData(){
    // //      $Data = DB::table('myst')->get();
    // //      return view('main.login', compact('Data'));
    // // }

    // public function studentLogin(){
    //     return view('main.studentView');
    // }

    // public function teacherLogin(){
    //     return view('main.teacherView');
    // }


    // public function delete($id){
    //     DB::table('myst')->where('id','=', $id)->delete(); //delete selected data by its id
    //     return redirect('/'); //Return to root directory
    //   }


    //   //edit
    //   public function editstudent(Request $request, $id){

    //     $name = $request->name; 
    //     $email = $request->email;
    //     $descr = $request->description;

    //       DB::table('employees')->where('id','=', $id)->update(['name' =>$name, 'email' => $email , 'description'=>$descr]);
    //       return redirect('/');
    //   }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
       
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

}
