 @extends('layouts.layout')
  @section('content')

  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link lnk" href="index.html#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link lnk" href="index.html#">Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link lnk" href="index.html#">e-Portals</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Info</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="index.html#">Registration</a>
                <a class="dropdown-item" href="index.html#">News</a>
                <a class="dropdown-item" href="index.html#">Population</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Oxford University</h1><hr>  
          <h3>School Managment</h3>
          <p>This is a template for a school website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="index.html#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">



        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
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
                                        <form action="" method="POST">
                                            
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Enter Name" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" required value="">
                                            </div>
                                             <br><br>  

                                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">Submit</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Close</button>
                                       
                                        </form>
                                         
                                       
                                    </div>
                                    <div class="modal-footer" style="background-color: black">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 

<!-------------------------------------------------------------------------------------------------------->


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
                                        <form action="" method="POST">
                                            
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Enter Name" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" required value="">
                                            </div>
                                             <br><br>  

                                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">Submit</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Close</button>
                                       
                                        </form>
                                         
                                       
                                    </div>
                                    <div class="modal-footer" style="background-color: black">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 
<!----------------------------------------------------------------------------------------------------->


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
                                        <form action="" method="POST">
                                            
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Enter Name" required value="">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" required value="">
                                            </div>
                                             <br><br>  

                                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">Submit</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Close</button>
                                       
                                        </form>
                                         
                                       
                                    </div>
                                    <div class="modal-footer" style="background-color: black">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 




          <div class="col-md-4">
              <div class="col-md-12 self-container">
            <h2>ADMIN</h2><hr>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <div class="col-md-12 self-contain">
              <!--p><a class="btn btn-danger mybtn" href="index.html#" role="button  data-toggle="modal" data-target="#myModal1">Login as Student &raquo;</a></p-->
             <p><button type="button" class="btn btn-danger  mybtn" data-toggle="modal" data-target="#myModal1">Managment</button></p> 
            </div>
              </div>
        </div>
          <div class="col-md-4">
           <div class="col-md-12 self-container">
            <h2>EMPLOYEE</h2><hr>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <div class="col-md-12 self-contain">
            <p><button type="button" class="btn btn-primary  mybtn" data-toggle="modal" data-target="#myModal2">Login as Teacher</button></p>
            </div>
            </div>
          </div>
          <div class="col-md-4">
           <div class="col-md-12 self-container">
            <h2>STUDENT</h2><hr>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <div class="col-md-12 self-contain">
            <p><button type="button" class="btn btn-primary  mybtn" data-toggle="modal" data-target="#myModal1">Login as Student</button></p>
            </div>
            </div>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

  @endsection

   

  
 