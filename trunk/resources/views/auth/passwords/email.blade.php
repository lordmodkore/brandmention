@extends ('layouts.form')
@section ('title', 'Reset Password')
@section('content')
<div class="page-height-o row-equal align-middle">
    <div class="column">
      <div class="card bg-white no-border">
           <div class="card-block">
               @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="text-center m-b">
            <h4 class="text-uppercase">Reset password</h4>
            <p>Please enter your email address to reset your password</p>
          </div>
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>
           </div>
      </div>
    </div>
</div>
@endsection
