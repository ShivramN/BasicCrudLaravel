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
        <title>Laravel 5.6 CRUD Tutorial With Example </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">
   </head>
   <body>
     <div class="container" style="background-color: #ffffcc">
          <h2 style="padding-top: 20px;">Student Registration System</h2><br/>
          <form method="post" action="{{action('StudentController@update', $id)}}" enctype="multipart/form-data">
          @csrf
       
           <input name="_method" type="hidden" value="PATCH">
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="fName"><strong>First Name:</strong></label>
                <input type="text" class="form-control" name="fname" value="{{ $student->fname }}">
                  @if ($errors->has('fname'))


                    <small class="text-danger">{{ $errors->first('fname') }}</small>

                @endif <br>
              </div>
        </div>
          <div class="row">
            <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="lName"><strong>Last Name</strong></label>
                  <input type="text" class="form-control" name="lname"  value="{{ $student->lname }}">
                   @if ($errors->has('lname'))


                    <small class="text-danger">{{ $errors->first('lname') }}</small>

                @endif <br>
                </div>
            </div>
           <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Course</strong></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="course"><br>
                  <option value="" selected="true" disabled>Select</option>
                  <option value="BE" @if($student->course == 'BE') selected  @endif  value="{{ $student->course }}">BE</option>
                  <option value="Bsc-IT" @if($student->course == 'Bsc-IT') selected  @endif  value="{{ $student->course }}">Bsc-IT</option>
                  <option value="BMS"  @if($student->course == 'BMS') selected  @endif  value="{{ $student->course }}">BMS</option>  
                  <option value="MBA" @if($student->course == 'MBA') selected  @endif  value="{{ $student->course }}">MBA</option>  
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
                <select name="semester"><br>
                  <option value="" selected="true" disabled>Select</option>
                  <option value="1" @if($student->semester == '1') selected  @endif  value="{{ $student->semester }}">&#8544;</option>
                  <option value="2"  @if($student->semester == '2') selected  @endif  value="{{ $student->semester }}">&#8545;</option>
                  <option value="3"  @if($student->semester == '3') selected  @endif  value="{{ $student->semester }}">&#8546;</option>  
                  <option value="4"  @if($student->semester == '4') selected  @endif  value="{{ $student->semester }}">&#8547;</option>
                  <option value="5"   @if($student->semester == '5') selected  @endif  value="{{ $student->semester }}">&#8548;</option> 
                  <option value="6"  @if($student->semester == '6') selected  @endif  value="{{ $student->semester }}">&#8549;</option>   
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
            <input class="form-control datepicker"  type="text" name="dob" value="{{$student->dob}}">
             @if ($errors->has('dob'))


                    <small class="text-danger">{{ $errors->first('dob') }}</small>

                @endif <br>
         </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label>Upload File ({{$student->filename}})</label>
            <input type="file" name="filename" value="{{$student->filename}}"><br>
             @if ($errors->has('filename'))


                    <small class="text-danger">{{ $errors->first('filename') }}</small>

                @endif <br>
         </div>
        </div>
       <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Gender</strong></lable>
                <select name="gender"><br>
                  <option value="" selected="true" disabled>Select</option>
                  <option value="Male" @if($student->gender == 'Male') selected  @endif  value="{{ $student->gender }}">Male</option>
                  <option value="Female" @if($student->gender == 'Female') selected  @endif  value="{{ $student->gender }}">Female</option>  
                  <option value="Others" @if($student->gender == 'Others') selected  @endif  value="{{ $student->gender }}">Others</option>  
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
</script> 
  </body>
</html>

@endsection

