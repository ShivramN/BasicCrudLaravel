@extends('layouts.app')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index Page</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
  <body>
    <div class="container" style="background-color: #ffffcc; ">
    <br/>
      @if (\Session::has('success'))
          <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br/>
       @endif

       @if(Auth::user()->isAdmin())

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Course</th>
        <th>Semester</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

       @foreach($students as $student)

      <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['fname']}}</td>
        <td>{{$student['lname']}}</td>
        <td>{{$student['course']}}</td>
        <td>{{$student['semester']}}</td>
        <td>{{$student['dob']}}</td>
        <td>{{$student['gender']}}</td>
        <td><a href="{{action('StudentController@edit', $student['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
         <form action="{{action('StudentController@destroy', $student['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
       @endforeach
       @endif
    </tbody>
  </table>
    <h1 style="text-align: center; padding-bottom: 30px;">Thank you for registering</h1>
  </div>
 
  </body>
</html>
@endsection
 
 
   
    
       
    
         

       
  
   

        


