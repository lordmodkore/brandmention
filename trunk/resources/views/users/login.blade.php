<!-- /page loading spinner -->
@extends ('layouts.form')

@section('title', 'Login')
@section('content')
<div class="page-height-o row-equal align-middle">
  <div class="column">
    <div class="card bg-white no-border">
      <div class="card-block">
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="text-center">{{ $error }}</div>
          @endforeach
        @endif
        <form role="form" method="POST" class="form-layout" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="text-center m-b">
            <h4 class="text-uppercase">Welcome back</h4>
            <p>Please sign in to your account</p>
          </div>
          <div class="form-inputs">
            <label class="text-uppercase">Your email address</label>
            <input type="email" name="email" id="email" class="form-control input-lg" value ="{{ old('email') }}" placeholder="Email Address" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <label class="text-uppercase">Password</label>
            <input type="password" class="form-control input-lg" name="password" id="password" value ="" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Login</button>
          <div class="divider">
            <span>OR</span>
          </div>
          <a class="btn btn-block no-bg btn-lg m-b" href="{{ route('register') }}">Signup</a>
          <p class="text-center">
            <small>
            <em>By clicking Log in you agree to our <a href="#">terms and conditions</a></em>
            </small>
          </p>
        </form>
      </div>
      <a href="{{route('password.request')}}" class="bottom-link">Forgotten password?</a>
    </div>
  </div>
</div>
@endsection