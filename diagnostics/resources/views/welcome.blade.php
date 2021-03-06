<!DOCTYPE HTML>
<html lang="en">
<head>
<title>MeDURA</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  
<style>


html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
               
            }

            .f_icons{
              margin: 10px 0px 0px 0px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .title {
                font-size: 84px;
                text-align: center;
            }

           
            .jumbotron {
    padding: 0.5em 0.6em;
    background-color: #0E0111;
    border-style : none;
    border-radius : 0px;
            }
          
         footer{
          padding:50px;
         }
          
         .row{
          margin-top:80px;
          

         }
         .n_icons{
          transition : 0.8s;
          font-size:80px;
          color:#808080;
         }
      .n_icons:hover {
       color: #0E0111;
       
      }
      
      .col-sm-3:hover {
        background-color: #fff;
      }
      
    a{
     color:#000;
     text-decoration: none;
    }
         a:hover {
color: #0E0111;

}


</style>

</head>
<body>

    
        <div class="jumbotron">
        <div class="title m-b-md " style="color:azure;">
           
        MeDURA 
       
        </div>
        <div class="text-center" style="color:azure;"><h3><b>Me</b>dicine <b>D</b>ispensing <b>U</b>nit for <b>R</b>ural <b>A</b>reas</h3></div>
</div>

        <div class="container text-center">
<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3"> 
    
<a href="/medura/doctor/login">
 <i class="fa fa-stethoscope  n_icons"  data-toggle="tooltip" data-placement="top" title="Doctor" ></i>
</a>
<p>
<a href="/medura/doctor/login">Doctor</a> 
</p>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
 <a class="btn-outline-default" href="/medura/patient/login"> 
    <i class='fas fa-user n_icons' data-toggle="tooltip" data-placement="top" title="Patient"></i>
    <p>
    <a href="/medura/patient/login">Patient</a> </p>
</div>


<div class="col-sm-3 col-md-3 col-lg-3">
 <a class="btn-outline-default" href="/medura/diagnostics/login"> 
 <i class="far fa-address-card  n_icons"  data-toggle="tooltip" data-placement="top" title="Diagnostics"></i>
 <p>
 <a href="/medura/diagnostics/login">Diagnostics</a></p>
 </div>
<div class="col-sm-3 col-md-3 col-lg-3">
 <a class="btn-outline-default" href="/medura/retailer/login"> 
    <i class='fas fa-medkit  n_icons'  data-toggle="tooltip" data-placement="top" title="Retailer"></i>
    <p>
    <a href="/medura/retailer/login">Retailer </a></p>
</div>
</div>


</div>
<footer class="footer">

    <img class="float-right f_icons" src="mitsubishi-logo.jpg" alt="mitsu icon" height="100" width="200">
    <img class="float-left f_icons" src="cvrlogo.jpg" alt="cvr icon" height="100" width="130">
</footer>

</body>
</html>