@extends ('layouts.app')
@section ('title', 'All Websites')
@section ('content')
	<div class="page-title">
      	<div class="title">Websites</div>
      	<div class="sub-title">List all websites</div>
    </div>
 	<div class="card bg-white">
    	<div class="card-header">All Users</div>
          <div class="card-block">
            <div class="no-more-tables">
          		<table class="table table-bordered table-striped m-b-0">
	                <thead>
	                  <tr>
	                    <th>ID</th>
	                    <th>Url</th>
	                    <th>Cost</th>
	                    <th>Categories</th>
	                    <th>F/N</th>
	                    <th>Publisher</th>
	                  	<th>Process Time</th>
                  	 	<th>Action</th>
	                  </tr>
	                </thead>
                  	<tbody>
              			@foreach ($websites as $website)
              			<tr>
              				<td data-title="ID">{{$website->id}}</td>
          					<td data-title="Url">{{$website->url}}</td>
          					<td data-title="Cost">{{$website->cost}}</td>
          					<td data-title="Categories">{{$website->categories}}</td>
          					<td data-title="Language">{{$website->language}}</td>
          					<td data-title="Pubisher">{{$website->user->firstname}}</td>
      						<td data-title="Pubisher">{{$website->processing_time}}</td>
		                    <td>
	                        <div class="row">
	                          <div class="col-lg-4">
	                            <a class="btn btn-primary btn-xs" href="#" >
	                              <span class="glyphicon glyphicon-pencil"></span>
	                            </a>                 
	                          </div>
	                          <div class="col-lg-4">
	  	                    	    <form action="{{action('WebsiteController@destroy', $website->id)}}" method="post">
	  						 	              {{csrf_field()}}
	  							               <input name="_method" type="hidden" value="DELETE">
	      						            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
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
@endsection