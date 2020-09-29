@extends('layouts.studentpage')

@section('content')

<div class="jumbotron">
 
<div class="row" style="margin:0px; padding:0px">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active lnk">
              <a class="nav-link lnk" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
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

<div class="col-md-6 tcol">

 <form action="{{ route('student') }}" method="post">
  @csrf
 <div class="form-group">
  <label class="tcolor" for="Name">Name</label>
  <input class="form-control" type="text" name="first_name" required>
 </div>
    <br>
 <div class="form-group">
  <label class="tcolor" for="Email">Middle name</label>
  <input class="form-control" type="text" name="middle_name" required>
 </div>
    <br>  
 <div class="form-group">
   <label class="tcolor" for="Description">Last name</label>
   <input class="form-control" type="text" name="last_name" required>
 </div>
    <br>
<div class="form-group">
   <label class="tcolor" for="Description">Department</label>
   <input class="form-control" type="text" name="department" required>
 </div>
    <br> 
 <div class="form-group">
   <label class="tcolor" for="Description">Password</label>
   <input class="form-control" type="text" name="password" required>
 </div>
    <br>   
 <div class="form-group">
   <input class="btn btn-primary btn-block mybtn" type="submit" value="Submit">
 </div>
   
 </form>
</div>

<div class="col-md-6 tcol mytable">

 <h4 class="tcolor" style=" margin-top: 10px; text-align:center;font-family:  Verdana, Geneva, Tahoma, sans-serif">List of Registered Students</h4><hr>
  

        <Table class="table">
        <thead class="tcolor">
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Middle name</th>
            <th>Last name</th>
            <th>Department</th>
            <th>Edit</th>
            <th>Remove</th>
            </tr>
        </thead>

     <tbody>

   @foreach($Data as $student)
     <tr>
       <td class="tcolor">{{ $loop->index +1 }}</td>
       <td style="color: rgb(228, 228, 224);">{{ $student->first_name }}</td>
       <td style="color: rgb(228, 228, 224);">{{ $student->middle_name }}</td>
       <td style="color: rgb(228, 228, 224);">{{ $student->last_name }}</td>
       <td style="color: rgb(228, 228, 224);">{{ $student->department }}</td>
       <td>


       <div class="modal fade" id="myModal1{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-header tcolor" style="background-color: black">
                                        <h5 class="modal-title" id="myModalTitle">Edit: {{$student->first_name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body myModal tcolor">
                                        <!--Modal content-->
                                        <form action="{{url('edit/'.$student->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" name="first_name" placeholder="Enter Name" required value="{{$student->first_name}}">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" name="middle_name" placeholder="Enter Name" required value="{{$student->middle_name}}">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="department" placeholder="Description" required value="{{$student->department}}">
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
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          
<div class="modal fade" id="myModal2{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-header" style="background-color: black">
                                        <h5 class="modal-title" id="myModalTitle">Remove?: {{$student->first_name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body myModal">
                                        <!--Modal content-->
                     
                                        <div class="form-group" style="text-align:center;">
                                        <h3  style="color:beige; margin-top: 10px; text-align:center;">Are you sure you want to remove this developer <span style="color:tomato">!</span></h3><hr>  
                                        </div>   
                                        

                                        <form action="{{'delete/'.$student->id}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input class="btn btn-sm btn-danger  mybtnform" type="submit" value="Remove!">
                                                <button type="button" class="btn btn-primary mybtnform" data-dismiss="modal" style="display:flex; float:right">Close</button>  
                                   
                                         </form>

                                    </div>
                                    <div class="modal-footer">
                                          
                                    </div>
                                </div>
                            </div>
                        </div>


           <button type="button" class="btn btn-sm btn-primary  mybtnform" data-toggle="modal" data-target="#myModal1{{$student->id}}">Edit</button> 
        
       </td>
       <td>
       <button type="button" class="btn btn-sm btn-danger  mybtnform" data-toggle="modal" data-target="#myModal2{{$student->id}}">Remove</button> 
       </td>
     </tr>
   @endforeach  
   </tbody>
</Table>



</div>
</div>

</div>
@endsection