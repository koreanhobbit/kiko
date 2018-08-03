@extends('admin_frontend.layout.frame_nude')
@section('main-section')
  <div class="container">
    <div class="form-outer text-center d-flex align-items-center">
      <div class="form-inner">
        <div class="logo text-uppercase"><strong class="text-primary">KiosKorea</strong></div>
        <p>Welcome to Reset Password Page of KiosKorea.</p>
        <form method="post" class="text-left form-validate" action="{{ route('password.request') }}">
          {{ csrf_field() }}
          <input type="hidden" name="token" value="{{ $token }}">
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

          <div class="form-group-material">
            <input id="password-confirm" type="password" name="password_confirmation" class="input-material {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
            <label for="password_confirmation" class="label-material {{ $errors->has('password_confirmation') ? 'text-danger' : '' }}">Password Confirmation</label>
            @if($errors->has('password_confirmation'))
              <div class="form-text text-danger">
                <span>
                  <strong>
                    
                      {{ $errors->first('password_confirmation') }}
                    
                  </strong>
                </span>
              </div>
            @endif
          </div>

          <div class="form-group text-center"><button type="submit" id="reset" class="btn btn-primary">Reset Password</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

