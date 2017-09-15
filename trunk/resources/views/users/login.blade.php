<!-- /page loading spinner -->
@extends ('layouts.form')

@section('title', 'Login')
@section('content')
  <div class="session-wrapper">
    <div class="page-height-o row-equal align-middle">
      <div class="column">
        <div class="card bg-white no-border">
          <div class="card-block">
            <form role="form" class="form-layout" action="/">
              <div class="text-center m-b">
                <h4 class="text-uppercase">Welcome back</h4>
                <p>Please sign in to your account</p>
              </div>
              <div class="form-inputs">
                <label class="text-uppercase">Your email address</label>
                <input type="email" class="form-control input-lg" placeholder="Email Address" required>
                <label class="text-uppercase">Password</label>
                <input type="password" class="form-control input-lg" placeholder="Password" required>
              </div>
              <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Login</button>
              <div class="divider">
                <span>OR</span>
              </div>
              <a class="btn btn-block no-bg btn-lg m-b" href="extras-signin.html">Signup</a>
              <p class="text-center">
                <small>
                <em>By clicking Log in you agree to our <a href="#">terms and conditions</a></em>
                </small>
              </p>
            </form>
          </div>
          <a ui-sref="user.forgot" class="bottom-link">Forgotten password?</a>
        </div>
      </div>
    </div>
  </div>
@endsection