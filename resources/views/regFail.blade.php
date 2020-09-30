@extends('layouts.admindashboard')

@section('content')
 

 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      
     
        
  
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('index') }}">Log out<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
        </div>
      </nav> 

   
      <div class="container-fluid">
      
   <br><br><br>
    
 </section>
 
 <section>
 
  <!-- Main jumbotron for a primary marketing message or call to action -->
  
     
    
      <!-- FOOTER -->
     
     <div class="row">
      <div class="col-md-12" style="text-align:center">
         <span class="fa fa-user-o font"></span>
      </div>
      <div class="col-md-12" style="text-align:center">
      <h2 class="good">Oops! This User Already Exist</h2> 
      </div>
      <section>
     
              
      
     </div>
      </div> <!-- /container -->
  
 
 </section>
   @endsection
