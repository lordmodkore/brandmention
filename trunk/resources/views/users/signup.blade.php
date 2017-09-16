@extends ('layouts.form')

@section('title', 'Sign Up')

@section('content')
<div class="page-height-o row-equal align-middle">
<div class="column">
  <div class="card bg-white no-border">
    <div class="card-block">
      <form role="form" class="form-layout" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <input type="hidden" id="group_id" name="group_id" value="1"/>
          <input type="hidden" id="status" name="status" value="1"/>
          <div class="text-center m-b">
            <h4 class="text-uppercase">Register Now</h4>
            <p>Join a growing community.</p>
          </div>
          <div class="form-inputs">
            <div class="name">
              <label class="text-uppercase">Name</label>
              <input type="text" name="firstname" id="firstname" class="form-control input-lg first" placeholder="First" required>
              <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last" required>
            </div>
            <label class="text-uppercase">Your current email address</label>
            <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email address" required>
              @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
          </div>
          <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Create Account</button>
          <p class="text-center"><small><em>By clicking Create account you agree to our <a href="#">terms and conditions</a></em></small>
        </p>
      </form>
    </div>
  </div>
</div>
</div>
@endsection