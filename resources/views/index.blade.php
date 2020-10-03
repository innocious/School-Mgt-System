@extends('layouts.app')

@section('section')

<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active lnk">
              <a class="nav-link lnk" href="index.html#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link lnk" href="index.html#">News/upadates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link lnk" href="index.html#">Contact Us</a>
            </li>
           
          </ul>
        </div>
      </nav>
    </div>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3 header">Oxford University</h1><hr>  
          <h3>School Managment</h3>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="index.html#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">



        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-header myModal" style="text-align:center">
                                        <h5 class="modal-title" id="myModalTitle">Login as Admin</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body  myModal">
                                        <!--Modal content-->
                                        <form action="" method="">
                                            
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="useradmin" placeholder="Enter Name" required value="">
                                          
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required value="">
                                            </div>
                                            <br>

                                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">login</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Exit</button>
                                       
                                        </form>
                                         
                                       
                                    </div>
                                    <div class="modal-footer" style="">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 

<!-------------------------------------------------------------------------------------------------------->


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-header myModal">
                                        <h5 class="modal-title" id="myModalTitle">Login as Teacher</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body myModal">
                                        <!--Modal content-->
                                        <form action="" method="">
                                            
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="Tfirst_name" placeholder="Enter Name" required value="">
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Department</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="Tdepartment" placeholder="Department" required value="">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" name="Tpassword" placeholder="Enter Password" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">To recover your password, follow this instructions........ <a href="">Password Recovery</a>.</small>
                                            </div>
                                             <br><br>  

                                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">login</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Exit</button>
                                       
                                        </form>
                                         
                                       
                                    </div>
                                    <div class="modal-footer myModal">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 
<!----------------------------------------------------------------------------------------------------->


<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-header myModal">
                                        <h5 class="modal-title" id="myModalTitle">Login as student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body myModal">
                                        <!--Modal content-->
                                        <form action="" method="">
                                            
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="Sname" placeholder="Enter Name" required value="">
                              
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Department</label>
                                                <input type="text" class="form-control" name="Sdepartment" placeholder="Department" required value="">
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="Spassword" placeholder="Password" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">To recover your password, follow this instructions........ <a href="">Password Recovery</a>.</small>
                                            </div>
                                             <br><br>  

                                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">login</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Exit</button>
                                       
                                        </form>
                                         
                                       
                                    </div>
                                    <div class="modal-footer myModal">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 




          <div class="col-md-4">
              <div class="col-md-12 self-container">
            <h2 class="header">ADMIN <span class="fa fa-automobile"></span></h2><hr>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <div class="col-md-12 self-contain">
              <!--p><a class="btn btn-danger mybtn" href="index.html#" role="button  data-toggle="modal" data-target="#myModal1">Login as Student &raquo;</a></p-->
             <p><button type="button" class="btn btn-danger  mybtn" data-toggle="modal" data-target="#myModal1">Managment</button></p> 
            </div>
              </div>
        </div>
          <div class="col-md-4">
           <div class="col-md-12 self-container">
            <h2 class="header">EMPLOYEE</h2><hr>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <div class="col-md-12 self-contain">
            <p><button type="button" class="btn btn-primary  mybtn" data-toggle="modal" data-target="#myModal2">Login as Teacher</button></p>
            </div>
            </div>
          </div>
          <div class="col-md-4">
           <div class="col-md-12 self-container">
            <h2 class="header">STUDENT</h2><hr>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac pecabut ratuse ertatum zambato facilisis in, egestas eget quam. Vestibulum  felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <div class="col-md-12 self-contain">
            <p><button type="button" class="btn btn-success  mybtn" data-toggle="modal" data-target="#myModal3">Login as Student</button></p>
            </div>
            </div>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

@endsection