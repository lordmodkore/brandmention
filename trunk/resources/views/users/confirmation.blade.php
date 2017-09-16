@extends ('layouts.form')

@section ('content')
<div class="page-height row-equal align-middle">
	<div class="column">
		<div class="card bg-white no-border">
			<div class="card-block">
			  <form role="form" class="form-layout" action="extras-signin.html">
			    <div class="text-center m-b">
			      <h4 class="text-uppercase">Registration Confirmed</h4>
			    </div>
			    <div class="form-inputs">
		      		<label class="text-uppercase">Your email address</label>
			 		<p>{{$user->email}}</p>
		 			<label class="text-uppercase">Your password</label>
		 			<p>{{$password}}</p>
			    </div>
			    <a href="{{route ('login')}}" class="btn btn-primary btn-lg btn-block">Login</a>
			  </form>
			</div>
		</div>
	</div>
</div>
@endsection