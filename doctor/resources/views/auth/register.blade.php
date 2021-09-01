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
  
      <h1><b>Doctor's Register</b></h1>
      
      <br><br>
      <form method="POST" action="{{ route('register') }}">
          
                            @csrf
                                         
                            <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Name" size="40"   name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                            <br>
 
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" size="40"  name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>
                        
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" size="40" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" size="40" name="password_confirmation" required>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            
                                    <button class="button button1">
                                          
                                                Register</button>
                                                </form>
                                        
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
