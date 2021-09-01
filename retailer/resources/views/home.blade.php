<!doctype HTML>
<html>
<head>
    <title>Retailer's dashboard</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
  margin: 0;
  font-family: "Nunito", sans-serif;
}

.container{
  margin-top: 20px;
}

h2{
  margin-left: 100px;
  color:#fff;
}

.navbar{
  background-color:#0E0111;
}
        </style>
        </head>
<body>

        <nav class="navbar navbar-expand-sm bg-default navbar-light">
                <!-- Brand/logo -->
              
                <h2>Retailer</h2>
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                   
                  <li class="nav-item">
                     <div class="dropdown">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="color: azure;">
                    <i class='fas fa-medkit' style="font-size:12px"></i> {{ Auth::user()->name }}
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

<div class="container">
        <h4><b> Name :</b> {{ Auth::user()->name }} </h4>
        <h5> <b>ID :</b>  {{ Auth::user()->email }}  </h5>
       
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Medication levels</div>
            
                <div class="card-body">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Area</th>
                        <th scope="col">DDU code</th>
                        <th scope="col">Medicine container</th>
                        <th scope="col">Level</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Katihar</td>
                        <td>#223</td>
                        <td>COLD</td>
                        <td>50%</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Nawada</td>
                        <td>#121</td>
                        <td>FEVER</td>
                        <td>60%</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Dharbanga</td>
                        <td>#402</td>
                        <td>COLD</td>
                        <td>45%</td>
                      </tr>
                      <tr class="table-danger">
                        <th scope="row">4</th>
                        <td>Dharnai</td>
                        <td>#333</td>
                        <td>COLD</td>
                        <td>20%</td>
                      </tr>
                    </thead>
                    <tr>
                      <th scope="row">5</th>
                      <td>Gopalganj</td>
                      <td>#216</td>
                      <td>FEVER</td>
                      <td>65%</td>
                    </tr>
                    </tbody>
                  </table>
                  
                                 
                
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
