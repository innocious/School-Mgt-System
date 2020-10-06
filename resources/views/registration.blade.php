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
        <div class="jumbotron">
            <h1 class="display-3">Registration</h1>
            <p class="lead">Fill in your details here</p>
            <hr class="my-2">
            
            <div class="form-group">
                <label for="admin_name">Full name</label>
                <input type="text" class="form-control" id="admin_name" placeholder="John Doe" name="admin_name">
            </div>

            <div class="form-group">
                <label for="admin_email">Email address</label>
                <input type="email" class="form-control" id="admin_email" placeholder="name@example.com" name="admin_email">
            </div>

            <div class="form-group">
              <label for="admin_password">Email address</label>
              <input type="password" class="form-control" id="admin_password" placeholder="Enter Your Password" name="admin_password">
            </div>

            <div class="form-group">
              <label for="confirm_admin_password">Email address</label>
              <input type="password" class="form-control" id="confirm_admin_password" placeholder="Enter Your Password" name="confirm_admin_password">
            </div>

        </div>
    </form>
    
@endsection