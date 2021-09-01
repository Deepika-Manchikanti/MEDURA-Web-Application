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
 
  



 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Month', 'Visitations', { role: 'style' } ],
        ['March', 10, 'color: gray'],
        ['April', 14, 'color: #76A7FA'],
        ['May', 16, 'opacity: 0.2'],
        ['June', 22, 'stroke-color: #703593; stroke-width: 4; fill-color: #C5A5CF'],
        ['July', 8, 'stroke-color: #871B47; stroke-opacity: 0.6; stroke-width: 8; fill-color: #BC5679; fill-opacity: 0.2']
      ]);

  // Set chart options
  var options = {'title':'Number of patients with fever',
                 'width':500,
                 'height':500};

                 var options1 = {'title':'Number of patients with cold',
                 'width':500,
                 'height':500};
  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
  chart.draw(data, options);
  var chart1 = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart1.draw(data, options1);
}
</script>
  
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

h1{
  margin-left:220px;
  margin-top: 10px;
}



            </style>


            </head>
    <body>
            <nav class="navbar navbar-expand-sm bg-default navbar-light">
                    <!-- Brand/logo -->
                    <b><h1>Statistics</h1></b>
                    
                    <!-- Links -->
                    <ul class="navbar-nav ml-auto">
                      
                      <li class="nav-item">
                         <div class="dropdown">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class='fa fa-stethoscope'> &nbsp;</i>  Dr. {{ Auth::user()->name }}
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
                    <a href="/medura/patient/register"><i class='fas fa-user-alt' style='font-size:20px'></i>
                      &nbsp;
                      Register new patient</a>
                    <a href="#" data-toggle="modal" data-target="#myModal"><i class='fas fa-address-book' style='font-size:20px' ></i>
                      &nbsp;
                      Calendar</a>
                      
                  
                  </div>
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
        <div class="col-md-8"></div>
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
      <h3><b> Name <i class="fa fa-stethoscope " ></i> :</b> Dr.{{ Auth::user()->name }}</h3>
      <div class="row">
            <div class="col-sm-6 ">
                    <div id="curve_chart" style="width: 900px; height: 500px"></div>
            </div>
            <div class="col-sm-6 ">
                      <div id="chart_div"></div>
            </div>
        </div>

                        </div></div>
    </body>
</html>