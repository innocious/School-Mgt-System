@extends('layouts.app')
@section('reg-content')
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Holy guacamole!</strong>Lets add a super admin
    </div>
    <form action="/registered" method="post">
      @csrf
        <div class="jumbotron mx-auto w-50">
            <h1 class="display-5">Registration</h1>
            <p class="lead">Fill in your details here</p>
            <hr class="mb-5">
            
            <div class="form-group py-3">
                {{-- <label for="admin_name">Full name</label> --}}
                <input type="text" class="form-control border-0 border-bottom rounded-0" id="admin_name" placeholder="Name" name="admin_name">
            </div>

            <div class="form-group">
                {{-- <label for="admin_email">Email address</label> --}}
                <input type="email" class="form-control border-0 border-bottom rounded-0" id="admin_email" placeholder="name@example.com" name="admin_email">
            </div>

            <div class="form-group py-3">
              {{-- <label for="admin_password">Password</label> --}}
              <input type="password" class="form-control border-0 border-bottom rounded-0" id="admin_password" placeholder="Password" name="admin_password">
            </div>

            <div class="form-group mb-5">
              {{-- <label for="confirm_admin_password">Confirm Password</label> --}}
              <input type="password" class="form-control border-0 border-bottom rounded-0" id="confirm_admin_password" placeholder="Confirm Password" name="confirm_admin_password">
            </div>
            <div class="form-group d-flex justify-content-between">
              <input type="submit" value="Submit" class="btn btn-primary">
              <input type="button" value="Close" class="btn btn-danger">
            </div>

        </div>
    </form>
    
@endsection