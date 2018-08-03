@extends('admin_frontend.layout.frame_nude')
@section('main-section')
  <div class="container">
    <div class="form-outer text-center d-flex align-items-center">
      <div class="form-inner">
        <div class="logo text-uppercase"><strong class="text-primary">KiosKorea</strong></div>
        <p>Welcome to Reset Password Page of KiosKorea.</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="post" class="text-left form-validate" action="{{ route('password.email') }}">
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
          <div class="form-group text-center"><button type="submit" id="login" class="btn btn-primary">Send Password Reset Link</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

