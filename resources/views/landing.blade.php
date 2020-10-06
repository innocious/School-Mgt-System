@extends('layout.landing-layout')
  @section('content')
    <section>
        <!-- the hero section -->
        <div class="container-fluid">
            <div class="image">
                <!--the navbar  -->
                <div class="container pb-2 " id="cont" >
                <br>
                    <nav class="navbar navbar-expand-lg  navbar-light">
                    <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler ml-auto" type="button"  data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup ml-auto">
                        <br>
                            <div class="navbar-nav ml-5 ml-auto">
                                <a class="nav-link active ml-3" id="menu" href="#">Home<span class="sr-only">(current)</span></a>
                                <a class="nav-link ml-3" href="#"></a>
                                <a class="nav-link ml-3" href="#"></a>
                            </div>
                        </div>
                    </nav>

                    $user = User::where('email', '=', $request->input('email')->first());
                    @if ($user === null)
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Holy guacamole!</strong> Hold on asec!!! There is no admin. Please register one.
                    </div>    
                    @else
                        
                    @endif
                    
                
                    <!-- end of nav bar -->
                    
                    <div>
                        <h2 class="good">Harrow Schools</h2>
                        <h6 class="small ml-2">Expanding knowledge to its full potentials</h6>
                        <div class="watch mb-5">
                            <br><br>
                        </div>
                    </div>
                </div>
                
                <!-- end of hero section -->
            </div>
        </div>
    </section>
    <section class="cards">
        <div class="container">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-4 mt-5">
                    <div class="card p-5">
                        <div class="adminicon">
                        <img src="{{ URL::to('/img/user-solid.svg') }}" class="card-img-top" alt="..." height="120rem"  width="20%">
                        </div>
                        <div class="card-body justify-content-center mt-2">
                            <h3 class="card-title">ADMIN</h3>
                            <button type="button" href="#" class="button0" class="mybtn" data-toggle="modal" data-target="#myModal1"><span class="fa fa-sign-in" > Sign In</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card p-5">
                        <div class="adminicon">
                        <img src="{{ URL::to('/img/user-plus-solid.svg') }}" class="card-img-top" alt="..." height="120rem"  width="20%">
                        </div>
                        <div class="card-body justify-content-center mt-2">
                            <h3 class="card-title">EMPLOYEE</h3>
                            <button type="button" href="#" class="button0" class="mybtn" data-toggle="modal" data-target="#myModal1"><span class="fa fa-sign-in" > Sign In</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card p-5">
                        <div class="adminicon">
                        <img src="{{ URL::to('/img/users-solid.svg') }}" class="card-img-top" alt="..." height="120rem"  width="20%">
                        </div>
                        <div class="card-body justify-content-center mt-2">
                            <h3 class="card-title">STUDENT</h3>
                            <button type="button" href="#" class="button0" class="mybtn" data-toggle="modal" data-target="#myModal1"><span class="fa fa-sign-in" > Sign In</span></button>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    </section> 
    <section>
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header tcolor" style="background-color: rgb(33, 33, 104)">
                        <h5 class="modal-title text-white" id="myModalTitle">Sign in</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body myModal tcolor">
                                        <!--Modal content-->
                        <form action="{{ route('authenticate') }}" method="POST">     
                        {{ csrf_field() }}
                        {{ method_field('GET') }}
     
                            <div class="form-group" id="adminEmail">
                                <label for="exampleInputName1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Email ID" required value="">
                                {{-- <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small> --}}
                            </div>
                            <br>

                            <div class="form-group" id="adminPassword">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required value="">
                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">Your password is safe with me</small>
                            </div>
                            <br>

            

                            <button type="submit" id="editbtn" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="display:flex; float:right">Close</button>
                                       
                        </form>                                        
                                         
                                       
                    </div>
                    <div class="modal-footer" style="background-color: rgb(33, 33, 104)">
                                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <i class="fa fa-facebook" aria-hidden="true" href="#" style="height:2rem; margin:2rem " ></i>
                    <i class="fa fa-instagram" aria-hidden="true" href="#" style="height:2rem; margin:2rem"></i>
                    <i class="fa fa-whatsapp" aria-hidden="true" href="#" style="height:2rem; margin:2rem"></i>
                    <i class="fa fa-slack" aria-hidden="true" href="#" style="height:2rem; margin:2rem"></i>
                    <i class="fa fa-linkedin" aria-hidden="true" href="#" style="height:2rem; margin:2rem"></i>
                </div>
            <div class="col-md-6"></div>

        </div>
            </div>
        </div>
    </section>   
    @endsection

