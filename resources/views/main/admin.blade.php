@extends('layouts.admindashboard')

@section('content')
 

 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
   <span><img src="" alt=""></span>
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
      </nav> 

   
      <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li>
              <div class="col-md-12" style=" text-align: center">
            <h1 class="font"><span class="fa fa-user-circle" ><h1> Admin </h1></span>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active link" href="index.html#">
             <div class="col-md-12" style="text-align:center">
             <span class="fa fa-handshake-o"> Welcome</span>
             </div>
                 
              
            <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <button type="button" href="#"  class="mybtn btn-lg btn-danger" data-toggle="modal" data-target="#myModal2">New Admin <span class="fa fa-gears" style="display:flex;float:right"></span></button>
            </li>
            <li class="nav-item">
            <button type="button" href="#"  class="mybtn btn-lg btn-success" data-toggle="modal" data-target="#myModal2">New Student <span class="fa fa-user-plus" style="display:flex;float:right"></span></button>
            </li>
            <li class="nav-item">
            <button type="button" href="#"  class="mybtn btn-lg btn-primary" data-toggle="modal" data-target="#myModal2">New Teacher <span class="fa fa-user-plus" style="display:flex;float:right"></button>
            </li>
            <li class="nav-item">
            <button type="button" href="#"  class="mybtn btn-lg btn-primary" data-toggle="modal" data-target="#myModal3">Admins <span class="fa fa-group" style="display:flex;float:right"></button>
            </li>
            <li class="nav-item">
            <button type="button"   class="mybtn btn-lg btn-primary" > <a style="text-decoration:none; color:white" href="{{ route('index') }}">Log Out</a> <span class="fa fa-user-plus" style="display:flex;float:right"></button>
            </li>
          </ul>
           
        </nav>

    
   <br><br><br>
    
  
<main role="main" class="col-sm-12 ml-sm-auto col-md-10 pt-3">
<div class="row">
<div class="col-md-12">

  <section>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header tcolor" style="background-color: black">
                        <h5 class="modal-title" id="myModalTitle">Edit:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body myModal tcolor">
                                        <!--Modal content-->
                        <form action="{{ route('register') }}" method="POST">     
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
     

                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required value="">
                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Name" required value="">
                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Name" required value="">
                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Role</label>
                                <input type="text" class="form-control" name="role" placeholder="Enter Name" required value="">
                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                            </div>
                            <br>


                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Close</button>
                                       
                        </form>                                        
                                         
                                       
                    </div>
                    <div class="modal-footer" style="background-color: black">
                                        
                    </div>
                </div>
            </div>
  


</section>



<section>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header tcolor" style="background-color: black">
                        <h5 class="modal-title" id="myModalTitle">Edit:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body myModal tcolor">
                                        <!--Modal content-->
                                        <h2 class="header">Admins</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                
                </tr>
              </thead>
              <tbody>
                @foreach($user as $users)
                <tr>
                <td>{{$loop->index +1}}</td>
                  <td style="color:Tomato">{{$users->name }}</td>
                  <td style="color:Tomato">{{$users->email }}</td>
                  <td style="color:Tomato">{{$users->role }}</td>
                </tr>
               @endforeach
               
               
              </tbody>
            </table>
       
                                       
                    </div>
                    <div class="modal-footer" style="background-color: black">
                                        
                    </div>
                </div>
            </div>
  


</section>






 

  
  
 

<section>
<main role="main" class="container">
<h2 class="good">Harrow Schools</h2>       
</main>
</section>

<hr>
 
</div><!-- /.blog-post -->

 </section>
 
 <section>
 
  <!-- Main jumbotron for a primary marketing message or call to action -->
  
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="con">
            <div class="row">
          <div class="col-md-12 post">
            <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">School Managment</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            Donec sed odio dui. Cras justo odio, dapibus ac
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
         
          </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="con">
            <div class="row">
          <div class="col-md-6 post">
          <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">Projects</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
          <div class="col-md-6 post">
          <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">School fees</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
          </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="con">
            <div class="row">
          <div class="col-md-6 post">
          <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">Student info</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
          <div class="col-md-6 post">
          <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">Exams</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
          </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="con">
            <div class="row">
          <div class="col-md-6 post" >
          <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">Health</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
          <div class="col-md-6 post">
          <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">Contacts</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
          </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="con">
          <div class="col-md-12 post">
          <p style="display:flex; float:right"><span class="fa fa-envelope-open font2"></span></p>
            <h2 style="color:tomato">Mission</h2><br>
            <hr>
            <p> Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
            <p><a class="btn btn-secondary mybtn"  href="index.html#" role="button"><span class="fa fa-pencil-square-o"> Update Post</span> &raquo;</a></p>
          </div>
          </div>
        </div>

        <hr>

    
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a class="mybtn" href="#">Back to top</a></p>
        <p style="color:white">&copy; 2020 Company, Inc.</p>
      </footer>

      </div> <!-- /container -->
  
 
 </section>
   @endsection
