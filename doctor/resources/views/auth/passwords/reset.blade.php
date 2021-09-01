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
            
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" size="40" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

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
                                <input id="password" type="password" placeholder="Password" size="40" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" size="40" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                <a href="{{url('login')}}" style="color:white;text-decoration:none;">
                                        <form method="POST" action="{{ route('login') }}">Reset Password</a>
                                        </form>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </body>
@endsection
