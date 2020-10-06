<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\User;
use function redirect;

class SchoolManagmentController extends Controller
{
    public function index(Request $request){        
        // $user = User::where('email', $request["email"]->first());
        // if ($user === null) {
        //     // user doesn't exist
        //     return view('registration');
        // }
        return view('landing');  
        
        // return view("registration");
         
     }
 
             
     public function admin(){
         return redirect::back();
     }
 
     public function register(Request $request) {
        //  $request->validate([
        //  'name'=>'required',
        //  'email'=>'required',
        //  'password'=>'required',
        //  ]);
     
 
        //  try {
        //      $user = new User();
        //      $user->name = $request->get( 'name' );
        //      $user->email = $request->get( 'email' );
        //      $user->password = Hash::make ( $request->get ( 'password' ) );
        //      $user->role = $request->get( 'role' );
        //      $user->user_role = "1";
        //      $user->save();
     
        //      return view( 'registrationSuccess' );
        //  }
        //  catch (\Exception $e) { // It's actually a QueryException but this works too
            //  if ($e->getCode() == 23000) {
                 // Deal with duplicate key error 
                //  return view('regFail'); 
            //  }
        //  }
     }
                 
                 
        /**
      * Handle an authentication attempt
      * 
      * @param \illuminate\Http\Request $request 
      * 
      * @return Response
      */
 
     public function authenticate()
     {  
        // $user = User::where('email', $request->email->first());
        $user = Admin::all();        
        // if ($user === null){
        //     return view('registration');
        // }
        return view('main.admin', compact('user'));
        // $credentials = $request->only('email','password');
         
        //  if(Auth::once($credentials)){
             //Authentication passed..
 
             
        //     $role = User::select("role")->where("email","LIKE", "$request->email","AND","name","LIKE", "$request->name")->get();
           
        //    foreach($role as $user_role){
        //              if($user_role->role=="Admin"){
                         // $user = Records::select("name")->where("name","LIKE", "$request->email")->get();
        //                  $user = User::select()->where("role","LIKE","Admin" )->get();
        //                  return view('main.admin', compact('user'));
                         
        //              }
        //              elseif($user_role->role=="Teacher"){
        //                  $user = User::select()->where("email","LIKE","$request->email","AND", "role","LIKE","Student" )->get();
        //                  return view('main.teacherView', compact('user'));
        //              }
        //              elseif($user_role->role=="Student"){
        //                  $user = User::select()->where("email","LIKE","$request->email","AND", "role","LIKE","Teacher" )->get();
        //                  return view('main.studentView', compact('user'));
        //              }
        //              else{                        
        //                      echo "something just went wrong";
        //              }
        //          } 
        //  }else{
             
        //     return redirect('/');
        //  }

        
          
     }  
 
     ///////////////////////////////////////////////////////////////////////////////////////
     public function logout() {
     
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
 
 
 
         public function delete($id){
           User::select()->where('id','=', $id)->delete(); //delete selected data by its id
           return redirect('/'); //Return to root directory
         }
 
 
       //edit
       public function editstudent(Request $request, $id){
 
          $name = $request->name; 
          $email = $request->email;
          $descr = $request->description;
 
           User::select()->where('id','=', $id)->update(['name' =>$name, 'email' => $email , 'description'=>$descr]);
           return redirect('/');
         }
}
