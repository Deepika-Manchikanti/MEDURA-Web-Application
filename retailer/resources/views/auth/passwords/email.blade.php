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

                              
                                <h1><b>Reset Password</b></h1>
                                
                                <br><br>
                
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                           
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Password" size="38"  name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <br><br>

                        <div class="form-group row mb-0">
                            
                                <button class="button button1">
                                <a href="{{url('login')}}" style="color:white;text-decoration:none;">
                                        <form method="POST" action="{{ route('login') }}">Send reset link to email</a>
                                        </form>
                                </button>
                            </div>
                        
                    </form>
               
        </div>
    </div>
</body>
@endsection
