<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
  
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

<style>
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
  top : 0px;
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
  margin-left: 220px;
  padding: 1px 16px;
  height: 1000px;
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


.card {
  margin-bottom : 2px;
}

h2{
  
  margin-top: 20px;
}

</style>
<script>
  $(document).ready(function(){
   setInterval(function(){ 
  $.get("{{ url('auth_patient') }}", function(data, status){
      console.log("Data: " + data);
    }); }, 4000);
});
</script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-default navbar-light">
  <!-- Brand/logo -->
  <div class="float-sm-left float-md-left float-lg-left float-xl-left"><h2>Patient Authentication</h2></div>
  
  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    
    <li class="nav-item">
       <div class="dropdown">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class='fa fa-stethoscope'> &nbsp;</i>Dr. {{ Auth::user()->name }}
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
<div class="sidebar">
  <a class="active" href="/medura"><h3><b>MeDURA</b></h3></a>
  <a href="/medura/doctor/home"><i class='fas fa-user-check' style='font-size:20px'></i>
    &nbsp;
    Existing patient</a>
    <a href="#" data-toggle="modal" data-target="#myModal"><i class='fas fa-address-book' style='font-size:20px' ></i>
    &nbsp;
    Calendar</a>
    <a href="/medura/doctor/statistics"><i class='fa fa-line-chart' style='font-size:20px'></i>
      &nbsp;
      Statistics</a>
      
  
</div>
<hr>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Calendar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
         
     

      <div class="row">
        <div class="col-xs-8 col-s-8 col-md-8 col-lg-8"></div>
        <div class="form-group col-md-8">
          <label for="Model">Date :</label>
          <input type="date" class="" name="date" onmouseover="this.value = d.getDate() + '-' + (d.getMonth()+1) + '-' + d.getFullYear()">
        </div>
      </div>
      
 </div>     
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
   
 

</div>
</div>
</div>
<div class="content">
       
  <div class="container">
   
    <br>
    <div class="card w-50">
      <div class="card-header"><b>Aadhar ID</b></div>
       <div class="card-body">
       <div class="form-group">
   <div class="col-xs-2">
    <input type="email" placeholder="Enter Aadhar ID" class="form-control" id="email">
    
    </div>

  </div>
  
     </div>
    </div>
    <br>
    <div class="card w-50">
      <div class="card-header"><b>MeDURA ID</b></div>
      <div class="card-body">
      <div class="form-group">
   <div class="col-xs-2">
    <form method="post" action="{{url('setPatient')}}">
        @csrf
    <input type="email" placeholder="Enter MeDURA Personal ID" class="form-control" id="patient_id" name="patient_id">
    
    </div>
   
      
    </div>
   
  </div>
  </div>
</form>
</div>

</div>

</body>
</html>

