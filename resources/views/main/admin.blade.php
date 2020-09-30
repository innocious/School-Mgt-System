@extends('layouts.admindashboard')

@section('content')


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link lnk" href="{{ route('index') }}">Log out <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link lnk" href="index.html#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link lnk" href="index.html#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="index.html#">Action</a>
                <a class="dropdown-item" href="index.html#">Another action</a>
                <a class="dropdown-item" href="index.html#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    
   <div class="container">
        <main role="main" class="col-sm-12 ml-sm-auto col-md-12 pt-3">
          <h1 class="headerAdmin">Admin</h1>

  <div class="col-sm-12 blog-main">
<div class="row">
<div class="col-md-6 blog-post">
<h2 class="headerAdmin">Registreations</h2>
<form action="{{ route('register') }}" method="post">
  @csrf
 <div class="form-group">
  <label class="tcolor" for="Name">User Name</label>
  <input class="form-control" type="text" name="name" required>
 </div>
    <br>
 <div class="form-group">
  <label class="tcolor" for="Email">Email</label>
  <input class="form-control" type="text" name="email" required>
 </div>
    <br>  
 <div class="form-group">
   <label class="tcolor" for="password">Password</label>
   <input class="form-control" type="text" name="password" required>
 </div>
 <br>
 <div class="form-group">
   <label class="tcolor" for="password">Role</label>
   <input class="form-control" type="text" name="role" required>
 </div>
    <br>   
 <div class="form-group">
   <input class="btn btn-primary btn-block mybtn" type="submit" value="Submit">
 </div>
   
 </form>


 
</div><!-- /.blog-post -->

          </section>
 <div class="col-md-6">
          <h2 class="headerAdmin">School Timetable</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
               
                
               
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    </div>
    </div>
    </div>
   @endsection
