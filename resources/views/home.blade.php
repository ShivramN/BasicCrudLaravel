@extends('layouts.app')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
@section('content')
<html>

  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">
 
  </head>
  <body>
    <div class="container" style="background-color: #ffffcc;">

      <h2 style="padding-top: 20px; color: green;">Student Registration System</h2><br/>
      <form method="post" action="{{url('students')}}" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="fName"><strong>First Name:</strong></label>
            <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
           
            @if ($errors->has('fname'))
                    <small class="text-danger">{{ $errors->first('fname') }}</small>
                @endif <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lName"><strong>Last Name</strong></label>
              <input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
                @if ($errors->has('lname'))
                    <small class="text-danger">{{ $errors->first('lname') }}</small>
                @endif <br>
            </div>
          </div>
           <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">

                <lable><strong>Course</strong></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="course">
               
                  <option value="" disabled selected>Select</option>
                  <option value="BE"  @if(old('course') == 'BE')selected @endif>BE</option>
                  <option value="Bsc-IT" @if(old('course') == 'Bsc-IT')selected @endif>Bsc-IT</option>
                  <option value="BMS" @if(old('course') == 'BMS')selected @endif>BMS</option>  
                  <option value="MBA" @if(old('course') == 'MBA')selected @endif>MBA</option>  
                </select>
                @if ($errors->has('course'))
                  <small class="text-danger">{{ $errors->first('course') }}</small>
                @endif <br>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Semester</strong></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="semester">
                  <option value="" selected="true" disabled>Select</option>
                  <option value="1"  @if(old('semester') == '1')selected @endif>&#8544;</option>
                  <option value="2"  @if(old('semester') == '2')selected @endif>&#8545;</option>
                  <option value="3"  @if(old('semester') == '3')selected @endif>&#8546;</option>  
                  <option value="4"  @if(old('semester') == '4')selected @endif>&#8547;</option>
                  <option value="5"  @if(old('semester') == '5')selected @endif>&#8548;</option> 
                  <option value="6"  @if(old('semester') == '6')selected @endif>&#8549;</option>   
                </select>
                  @if ($errors->has('semester'))
                   <small class="text-danger">{{ $errors->first('semester') }}</small>
                @endif <br>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Birth Date </strong>  
            <input class="form-control datepicker" type="text" name="dob" value="{{ old('dob') }}">
             @if ($errors->has('dob'))
                    <small class="text-danger">{{ $errors->first('dob') }}</small>
                @endif <br>
         </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="filename"><br>
               @if ($errors->has('filename'))
                    <small class="text-danger">{{ $errors->first('filename') }}</small>
                @endif <br> 
         </div>
        </div>
       <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Gender</strong></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="gender"><br>
                  <option value="" selected="true" disabled>Select</option>
                  <option value="Male"  @if(old('gender') == 'Male')selected @endif>Male</option>
                  <option value="Female" @if(old('gender') == 'Female')selected @endif>Female</option>  
                  <option value="Others" @if(old('gender') == 'Others')selected @endif>Others</option>  
                </select>
                  @if ($errors->has('gender'))
                   <small class="text-danger">{{ $errors->first('gender') }}</small>
                @endif <br>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:20px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>  
      </form>
    </div>
   <script type="text/javascript">
 jQuery(document).ready(function($) {
        $('.datepicker').datepicker({
            dateFormat: "dd-mm-yy"
        });
    });
</script> 

  </body>
</html>
       
        
        
@endsection
