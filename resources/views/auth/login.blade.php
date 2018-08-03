@extends('admin_frontend.layout.frame_nude')

@section('main-section')
  <div class="container">
    <div class="form-outer text-center d-flex align-items-center">
      <div class="form-inner">
        <div class="logo text-uppercase"><span>LoginPage</span><strong class="text-primary">KiosKorea</strong></div>
        <p>Welcome to KiosKorea.</p>
        <form method="post" class="text-left form-validate" action="{{ route('login.attempt') }}">
          {{ csrf_field() }}
          <div class="form-group-material">
            <input id="email" type="email" name="email" required class="input-material {{ $errors->has('email') ? 'is-invalid' : '' }}">
            <label for="email" class="label-material {{ $errors->has('email') ? 'text-danger' : '' }} ">Email</label>
            @if($errors->has('email'))
              <div class="form-text text-danger">
                <span>
                  <strong>
                    
                    {{ $errors->first('email') }}
                    
                  </strong>
                </span>
              </div>
            @endif
          </div>
          <div class="form-group-material">
            <input id="password" type="password" name="password" class="input-material {{ $errors->has('password') ? 'is-invalid' : '' }}">
            <label for="password" class="label-material {{ $errors->has('password') ? 'text-danger' : '' }}">Password</label>
            @if($errors->has('password'))
              <div class="form-text text-danger">
                <span>
                  <strong>
                    
                      {{ $errors->first('password') }}
                    
                  </strong>
                </span>
              </div>
            @endif
          </div>
          <div class="form-group text-center"><button type="submit" id="login" class="btn btn-primary">Login</button>
          </div>
        </form>
        <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a>
      </div>
    </div>
  </div>
@endsection