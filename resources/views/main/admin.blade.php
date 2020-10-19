@extends('layouts.admindashboard')

@section('content')
 
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> 
    <a class="navbar-brand" href="index.html#">Admin Dashboard</a>
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
    <div class="d-inline-flex">
      <button class="btn-transparent btn" type="submit"><i class="fa fa-user-circle-o text-white fa-2x mx-2" aria-hidden="true"></i></button>
      <button class="btn-transparent btn" type="submit"><i class="fa fa-cogs text-white fa-2x" aria-hidden="true"></i></button>
     </div>
  </nav> 

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 border-right border-dark">
        This part
        <div class="d-flex flex-column">
          <button class="btn btn-lg btn-dark my-2">Button 1</button>
          <button class="btn btn-lg btn-dark my-2">Button 2</button>
          <button class="btn btn-lg btn-dark my-2">Button 3</button>
          <button class="btn btn-lg btn-dark my-2">Button 4</button>  
        </div>        
      </div>
      <div class="col-md-9">
        <div class="row ">
          <div class="col-md-4 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Number of teachers </h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Number of Students </h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Number of Admin</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
  </div>
  


   
      <div class="container-fluid">
      <div class="row">
        
        <hr>

    
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a class="mybtn" href="#">Back to top</a></p>
        <p style="color:white">&copy; 2020 Company, Inc.</p>
      </footer>

      </div> <!-- /container -->
  
 
 </section>
   @endsection
