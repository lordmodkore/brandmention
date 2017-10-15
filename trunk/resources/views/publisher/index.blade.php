@extends ('layouts.app')
@section ('title', 'All Websites')
@section('styles')
  <link rel="stylesheet" href="{{ asset('vendor/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">
@endsection
@section ('content')
	<div class="page-title">
  	<div class="title">Websites</div>
  	<div class="sub-title">List all websites</div>
  </div>
 	<div class="card bg-white">
  	<div class="card-header">
      <div class="row">
        <div class="col-md-8">
          All Users
        </div>
      </div>
    </div>
    <div class="card-block">
      <div class="no-more-tables">
    		<table class="table table-bordered table-striped m-b-0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Language</th>
                <th>Country</th>
                <th>Paypal Email</th>
            	 	<th>Action</th>
              </tr>
            </thead>
            	<tbody>
          			@foreach ($publishers as $publisher)
            			<tr>
              				<td data-title="ID">{{$publisher->id}}</td>
          					<td data-title="First Name">{{$publisher->firstname}}</td>
          					<td data-title="Last Name">{{$publisher->lastname}}</td>
          					<td data-title="Email">{{$publisher->email}}</td>
          					<td data-title="Language">{{$publisher->language}}</td>
    						    <td data-title="Country">{{$publisher->country}}</td>
                    <td data-title="Paypal Email">{{$publisher->paypal_username}}</td>
                    <td data-title="Actions">
                      <div class="row">
                        <div class="col-lg-4 col-xs-6">
                          <a class="btn btn-primary btn-xs" href="{{action('PublisherController@edit', $publisher->id)}}" >
                            <span class="glyphicon glyphicon-pencil"></span>
                          </a>                 
                        </div>
                        <div class="col-lg-4 col-xs-6">
	                    	    <form action="{{action('PublisherController@destroy', $publisher->id)}}" method="post">
						 	              {{csrf_field()}}
							               <input name="_method" type="hidden" value="DELETE">
    						            <button class="btn btn-danger btn-xs" type="submit">
                              <span class="glyphicon glyphicon-trash"></span>
                            </button>
                          </form>
                      </div>
                    </td>
            			</tr>
          			@endforeach
            	</tbody>
    		</table>
        </div>
    </div>
</div>
@endsection
@section ('scripts')
    <script src="{{ asset('vendor/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('js/helpers/smartresize.js') }}"></script>
    <script src="{{ asset('js/constants.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('vendor/chosen_v1.4.0/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/checkbo/src/0.1.4/js/checkBo.min.js') }}"></script>
    <script src="{{ asset('vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('js/forms/wizard.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/dist/sweetalert.min.js') }}"></script>
@endsection