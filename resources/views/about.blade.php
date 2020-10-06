@extends('layouts.master')

@section('content')

<div>
<nav class="navbar nb1 navbar-expand-lg">
    <a class="navbar-brand cursivefont font-weight-bolder aquafont" href="#">Gamma/Akwa Ibom School Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"> 
          <a class="nav-link cursivefont font-weight-bolder aquafont" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link cursivefont font-weight-bolder aquafont" href="#">About</a>
        </li>
        

        <li class="nav-item">
            <a type="button" class="btn btn2 pl-3 pr-4 pb-2 pt-2 text-white font-weight-bolder cursivefont" href="#">Enroll Now</a>
        </li>
      </ul>

      
    </div>
  </nav>

<div class="container">
  
<h1 class="text-center font-weight-bolder cursivefont aquafont" style="">ABOUT US</h1>
<p class="text-center font-weight-bolder cursivefont aquafont">Meet our staff and keep in touch with us if you have any questions</p>

<div class="mainOverlay text-center">




  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid.max.width 100" height="400vh" src="img/schoolbackground1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid.max.width 100" height="400vh" src="img/schoolbackground2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid.max.width 100" height="400vh" src="img/schoolbackground3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>



<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meet the school board</h5>
        <p class="card-text">Our school is funded and overseen by community-driven philanthropists
          with the goal of pushing forward future leaders to their full potential.
        </p>
        <a href="#school_board" class="btn btn-primary">Click to view more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meet the principal and junior adminstrators</h5>
        <p class="card-text">Our school is run by a fully competent and qualified management team who strive for the best.</p>
        <a href="#administrative_team" class="btn btn-primary">Click to view more</a>
      </div>
    </div>
  </div>
</div>


<div class="row mb-5">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meet the teaching council</h5>
        <p class="card-text">We are staffed with highly-qualified teachers, guaranteed to esure the success of our students.
          Our teachers are lead by a team well-respected professors with a background in higher learning.
        </p>
        <a href="#teaching_council" class="btn btn-primary">Click to view more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meet the staff leads</h5>
        <p class="card-text">Our school is fully staffed and lead by a highly-trained and experienced team to ensure a safe, clean and advanced environment for your wards.
          We work to ensure a employed in a well-paying and comfortable working environment.
        </p>
        <a href="#staff_leads" class="btn btn-primary">Click to view more</a>
      </div>
    </div>
  </div>
</div>

<hr>

<a id="school_board">
<h3 class="text-center font-weight-bolder cursivefont aquafont mt-5" style="">SCHOOL BOARD</h3>
</a>

<div class="container">
<div class="card-group mb-5">
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<a id="administrative_team">
<h3 class="text-center font-weight-bolder cursivefont aquafont" style="">PRINCIPAL AND JUNIOR ADMINISTRATORS</h3>
</a>


<div class="card-group mb-5">
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Junior Adminstrator #1</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Principal</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Junior Administrator 2</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> 
    </div>
  </div>
</div>

<a id="teaching_council">
<h3 class="text-center font-weight-bolder cursivefont aquafont" style="">TEACHING COUNCIL</h3>
</a>


<div class="card-group mb-5">
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Science representative</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Civics representative</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Athletics representative</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<a id="staff_leads">
<h3 class="text-center font-weight-bolder cursivefont aquafont" style="">SENIOR IT TECHNICIAN, LEAD NURSE & GROUNDSKEEPING CHIEF</h3>
</a>

<div class="card-group mb-5">
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Senior IT Technician</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lead Nurse/pharmacists</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img\kitten image.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Chief of Groundskeeping</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

</div>

<div class="mt-5">

<div class="ml-5 float-left">
<img src="img\school_gym.jpg" class="rounded" height="300vh" alt="...">
<h5 class="text-white text-center mt-3">Our stadium</h5>
</div>

<div class="mr-5 float-right">
<img src="img\school_classroom.jpg" class="rounded" height="300vh" alt="...">
<h5 class="text-white text-center mt-3">One of our classrooms</h5>
</div>

</div>

<hr>

<div class="ml-5 mt-5 text-center">
<img src="img\school_grounds.jpg" class="rounded" height="300vh" alt="...">
<h5 class="text-white text-center mt-3">The school grounds/main hall</h5>
</div>

<hr>

<div class="mt-5">

<div class="ml-5 float-left">
<img src="img\school_library.jpg" class="rounded" height="300vh" alt="...">
<h5 class="text-white text-center mt-3">Our library</h5>
</div>

<div class="mr-5 float-right">
<img src="img\school_cafeteria.jpg" class="rounded" height="300vh" alt="...">
<h5 class="text-white text-center mt-3">Our cafeteria</h5>
</div>

</div>


</div>

</div>


@endsection