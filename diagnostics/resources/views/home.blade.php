<!doctype HTML>
<html>
<head>
    <title>Diagnostic's dashboard</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

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
              
                <h2>Diagnostic's</h2>
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                   
                  <li class="nav-item">
                     <div class="dropdown">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="color: azure;">
                    <i class="far fa-address-card ">&nbsp;&nbsp;</i> {{ Auth::user()->name }}
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
        <h4><b> Diagnostic center :</b> {{ Auth::user()->name }}  </h4>
        <h5> <b>ID :</b>  {{ Auth::user()->email }}</h5>
       
  <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Report upload</div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <?php $x= $flag ?? 'none'?>
             @if ($x=='SUCCESS')
             <div class="alert alert-success" role="alert">
              <p>Uploaded successfully!</p>
          </div>
@endif

                  <form action="addfile" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="text" name="patient_id" class="form-control" placeholder="Enter Patient ID"><br>
                    <input type="text" name="report_name" class="form-control" placeholder="Enter the report type"><br>
                    <input type="file" name="report" id="file_to_upload"> <br> <br>
                    <input class="btn btn-primary" type="submit" value="Upload" name="upload_btn">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
