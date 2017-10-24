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
        <div class="col-md-4 pull-right">
          <button type="button" data-toggle="modal" data-target="#import_csv" class="import-csv btn btn-primary btn-sm btn-icon mr5">
              <i class="icon-cloud-upload"></i>
              <span>Import Csv</span>
            </button>

            <button type="button" class="btn btn-primary btn-sm btn-icon mr5">
                <i class="icon-cloud-upload"></i>
                <span>Import Csv</span>
            </button>
            <button type="button" class="btn btn-primary btn-sm btn-icon mr5">
                <i class="icon-cloud-download"></i>
                <span>Export</span>
            </button>
        </div>
      </div>
    </div>
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
          					<td data-title="Categories">
                      @foreach($website->categories as $cat)
                        {{ $loop->first ? '' : '/' }}
                        {{$cat->name}}
                      @endforeach
                    </td>
          					<td data-title="F/N">{{$website->f_n}}</td>
                    <td data-title="Categories">
                      @foreach($website->publishers as $publisher)
                        {{ $loop->first ? '' : '/' }}
                        {{$publisher->firstname ."&nbsp;".$publisher->lastname }}
                      @endforeach
                    </td>
    						    <td data-title="Processing Time">{{$website->processing_time}}</td>
                    <td data-title="Actions">
                      <div class="row">
                        <div class="col-lg-4 col-xs-6">
                          <a class="btn btn-primary btn-xs" href="{{action('WebsiteController@edit', $website->id)}}" >
                            <span class="glyphicon glyphicon-pencil"></span>
                          </a>                 
                        </div>
                        <div class="col-lg-4 col-xs-6">
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
<!--Upload Form-->
<div class="modal fade" id="import_csv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="import_csv_title">Select File</h5>
      </div>
      <div class="modal-body">
        <form action="{{route('website.upload')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="import_csv" class="form-control-label">Import Csv:</label>
            <input type="file" class="form-control" id="import_csv" name="csvfile">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
       </form>
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