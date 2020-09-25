@extends('layouts.app')

@section('content')

<div class="jumbotron " style="margin-top: 65px;">
    <h3 style="text-align: center; margin-bottom: 30px">Simple Todo List</h3><hr>
    <br><br>
    <div class="row">
        <div class="col-md-6 tcol">

            <form method="post" action="{{ route('todo') }}">
                @csrf
               <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    <small  id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" required>
                </div>
                <div style="text-align: center; margin: 50px;">
                  <button type="submit" class="btn btn-primary btn-block mybtn">Submit</button>
                </div>
                
            </form>
        </div>
       
        <div class="col-md-6 tcol">
             
          <div class="col-md-12 mytable" >
            <table class="table">
           
               <thead style="color:rgb(6, 241, 241);" >
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($todos as $do)
                    <tr>

                        <td style="color:white">{{ $loop->index +1}}</td>
                        <td style="color:rgb(100, 200, 200);">{{ $do->name }}</td>
                        <td style="color: rgb(228, 228, 224);">{{ $do->description }}</td>

                        <div class="modal fade" id="myModal{{$do->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-header" style="background-color: black">
                                        <h5 class="modal-title" id="myModalTitle">Edit: {{$do->name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body myModal">
                                        <!--Modal content-->
                                        <form action="{{url('edit/'.$do->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required value="{{$do->name}}">
                                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" required value="{{$do->description}}">
                                            </div>
                                             <br><br>  
                                            <button type="submit" id="editbtn" class="btn btn-primary btn-sm">Submit</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display:flex; float:right">Close</button>
                                    </div>
                                    <div class="modal-footer" style="background-color: black">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <td>
                            <button type="button" class="btn btn-sm btn-primary  mybtnform" data-toggle="modal" data-target="#myModal{{$do->id}}">
                                Edit
                            </button>
                        </td>

                        <td>
                            <form action="{{url('delete/'.$do->id)}}" method="POST">
                            
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                           
                              <button type="submit" class="btn btn-danger btn-sm mybtnform">Delete</button>
                           
                             </form>
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div> 
    </div>
</div>



@endsection