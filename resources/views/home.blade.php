@extends('layouts.app')


                  <!--   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
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
                 @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="fName"><strong>First Name:</strong></label>
            <input type="text" class="form-control" name="fname"><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lName"><strong>Last Name</strong></label>
              <input type="text" class="form-control" name="lname"><br>
            </div>
          </div>
           <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Course</strong></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="course"><br>
                  <option value="" selected="true" disabled>Select</option>
                  <option value="BE">BE</option>
                  <option value="Bsc-IT">Bsc-IT</option>
                  <option value="BMS">BMS</option>  
                  <option value="MBA">MBA</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Semester</strong></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="semester"><br>
                  <option value="" selected="true" disabled>Select</option>
                  <option value="1">&#8544;</option>
                  <option value="2">&#8545;</option>
                  <option value="3">&#8546;</option>  
                  <option value="4">&#8547;</option>
                  <option value="5">&#8548;</option> 
                  <option value="6">&#8549;</option>   
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Birth Date </strong>  
            <input class="form-control datepicker" type="text" name="dob"><br>  
         </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="filename"><br><br>    
         </div>
        </div>
       <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Gender</strong></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="gender"><br>
                  <option value="" selected="true" disabled>Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>  
                  <option value="Others">Others</option>  
                </select>
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
