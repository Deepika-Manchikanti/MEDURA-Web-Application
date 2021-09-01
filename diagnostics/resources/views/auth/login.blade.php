@extends('layouts.app')

@section('content')
<body>
<div class="split left">
    <div class="centered">
      <img src="https://png.pngtree.com/thumb_back/fw800/back_pic/04/56/12/0958650ae873d40.jpg" alt="bg" style="width:700px;height:657px;">
      
    </div>
  </div>
  

<div class="split right">
    <div class="centered">
  
      <h1><b>Diagnostic's Login</b></h1>
      
      <br><br>
      <form method="POST" action="{{ route('login') }}">
          
                            @csrf
                                         
                            <div class="col-md-6">
                                <input id="email" type="email"  placeholder="Email" size="40" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <br><br><br>

                       
                            
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" size="40" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                       
                        <br><br>
                       

                        <div class="form-group row mb-0">
                          
                                <button class="button button1">
                                       
                                    <a href="{{url('login')}}" style="color:white;text-decoration:none;"> 
                                        <form method="POST" action="{{ route('login') }}">
                                            Login</a></form>
                                </button>

                               
                         <footer class="footer">
                            Don't have an account yet? <a href="/medura/diagnostics/register"> Sign up! </a>

                               </footer>
                              
                            </form>
          
                        </div>
                        
                     
                    </body>
@endsection
