<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
   <title>Patient's Portal</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

body {
  margin: 0;
  font-family: "Nunito", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 220px;
  background-color: #0E0111;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #0E0111;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 225px;
  padding: 1px 16px;
  height: auto;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
  float:right;
}

.card {
    width : 100%;
  }

  .top-tabs {
    display : inline-block;
    padding : 10px;
    text-align : center;
    font-size : 20px;
    margin : 5px;
  }
.top-tabs .card-header {
  background-color : #fff;
  padding : 2px;
}


</style>
  </head>
  <body>
  


<div class="sidebar">
  <a class="active" href="/medura"><h3><b>MeDURA</b></h3></a>
  <a href="/medura/doctor/home"><i class='fas fa-user-check' style='font-size:20px'></i>
    &nbsp;
    Existing patient</a>
  <a href="#" data-toggle="modal" data-target="#myModal"><i class='fas fa-address-book' style='font-size:20px'></i>
    &nbsp;
    Calendar</a>
    <a href="/medura/doctor/statistics"><i class='fa fa-line-chart' style='font-size:20px'></i>
      &nbsp;
      Statistics</a>
     

</div>
<div class="container content">
<nav class="navbar navbar-expand-sm bg-default navbar-dark">
<!-- Brand/logo -->

<!-- Links -->
<ul class="navbar-nav ml-auto">

<li class="nav-item">
   <div class="dropdown">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
  <i class='fa fa-stethoscope'> &nbsp;</i> Dr. {{ Auth::user()->name }}
</button>
<div class="dropdown-menu">
  <a class="dropdown-item" href="{{ route('logout') }}" style="text-decoration: none; color : blue"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

</div>
</div>
 
</li>
</ul>
</nav>

<h3> <b>Name :</b> {{ $name }}</h3>
<h5><b>Age:</b>32</h5>
<h5><b>Gender:</b>M</h5>
<h5><b>Area:</b>Dharnai</h5>
<h5> <b>ID :</b> {{ $id }} </h5>
   <div class="container">
 <div class="row">


<div class="card top-tabs col-sm-2">
  <div class="card-header">Previous Visit</div>
<div class="card-body">
  @foreach($patient_data as $patient)
  <a href="#" data-toggle="modal" data-target="#a{{ str_replace('/','',$patient->date) }}"> {{ $patient->date }} </a>
@break @endforeach
</div>
</div>


<div class="card top-tabs col-sm-2">
<div class="card-header">History</div>
<div class="card-body">
 {{ count($patient_data) }} 
</div>
</div>


<div class="card top-tabs col-sm-3">
<div class="card-header">Current Visit</div>
<div class="card-body"> <?php echo  date("l") . " "; echo date("d/m/Y");  ?>
 <br> <a href="#" data-toggle="modal" data-target="#prx">
   Write a prescription
  </a>
  </div>
</div>


<div class="col-sm-4">
<div class="card top-tabs">
  <div class="card-header">Emergency Medication Used </div>
  <div class="card-body">
    <label>
     COLD
        </label>
    </div>
   
</div>
</div>
</div>
</div>

    </div>
   <hr>

  <!-- The Modal -->
  <div class="modal" id="prx">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Prescription Pad</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form method="post" action="{{url('add')}}">
        @csrf

        <div class="row">
          <div class="col-md-8"></div>
          <div class="form-group col-md-8">
            <label for="Model">Date :</label>
            <input type="text" class="" name="date" value="<?php echo date("d/m/Y");  ?>" readonly>
          </div>
        </div><a href="#" class="btn btn-success" id="add_btn"> Add prescription field </a>
       
        
        <div class="row">
        <div class="form-group col-md-8" id="prescription">    
    </div>
    </div>
         <textarea name="notes" class="form-control" placeholder="Notes..."></textarea>
        <div class="row">
          <div class="col-md-8"></div>
          <div class="form-group col-md-8">
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        
      </form>
   </div>
   <hr>
<script>

var add_btn = document.getElementById("add_btn");
var count = 1;
add_btn.addEventListener("click", function () {

var ip1 = document.createElement("input");
ip1.type = 'text';
ip1.id = "medicine" + count;
ip1.placeholder = "medicine" + count;
count = count+1;

var ip2 = document.createElement("input");
ip2.type = "number";

ip2.placeholder = "quantity";
ip2.addEventListener("keydown", function() {

ip2.name = ip1.value;

});
ip1.className = 'd-inline';
ip2.className

node = document.createElement("P");

node.appendChild(ip1);
node.appendChild(ip2);


document.getElementById("prescription").appendChild(node);

});

 </script>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
 <div class="container content">

<div class="row">
<div class="col-sm-6">
<div class="card">
  <div class="card-header">Prescriptions</div>
  <div class="card-body">
<div class="container">

@foreach($patient_data as $patient)
<p><a href="#" data-toggle="modal" data-target="#a{{ str_replace('/','',$patient->date) }}">{{ $patient->date}} by {{ $patient->doctor }} </a></p>
<!-- Modal -->
  <div class="modal fade" id="a{{ str_replace('/','',$patient->date) }}" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          @foreach($patient as $key=>$value)
@if($key !=  '_id' && $key != 'doctor')
<table class="table">
  <tr>
<td>{{ $key }} </td><td> {{ $value }}</td>
</tr>
</table>
@endif
@endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



@endforeach
</div>
</div>
</div>
</div>

<div class="col-sm-6">
  <div class="card">
  <div class="card-header"> Diagnostic reports </div>
  <div class="card-body">
<div class="container">

@foreach($diagnostics as $report)
@foreach($report as $key=>$value)
@if($key !=  '_id')
<p><a href="#" data-toggle="modal" data-target="#{{ $key }}">  {{ $key }}  </a></p>
@endif
<!-- Modal -->
  <div class="modal fade" id="{{ $key }}" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          
<img src="{{ $value }}" alt="Report picture or pdf">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

@endforeach

@endforeach
</div>
</div>
</div>
  </div>
</div>


</div>
  </body>
</html>