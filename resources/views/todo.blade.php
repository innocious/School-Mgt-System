

@extends('layouts.app')

@section('content')

    <div class="jumbotron " style="margin-top: 100px;">
        <h3 style="text-align: center">Simple Todo List</h3>
        <div class="row">
            <div class="col-md-6">

                <form method="post" action="{{ route('todo') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your todo name with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="col-md-6">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($todo as $do)
                    <tr>

                        <td>{{ $loop->index +1}}</td>
                        <td>{{ $do->name }}</td>
                        <td>{{ $do->description }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>



@endsection
