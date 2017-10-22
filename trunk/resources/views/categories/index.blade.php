@extends ('layouts.app')
@section ('title', 'All Websites')
@section('styles')
  <link rel="stylesheet" href="{{ asset('vendor/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">
@endsection
@section ('content')
	<div class="page-title">
  	<div class="title">Categories</div>
  	<div class="sub-title">List of all categories</div>
  </div>
 	<div class="card bg-white">
  	<div class="card-header">
      <div class="row">
        <div class="col-md-8">
          Categories
        </div>
      </div>
    </div>
    <div class="card-block">
      <div class="no-more-tables">
      		<table class="category-table table table-bordered table-striped m-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Description</th>
              	 	<th>Action</th>
                </tr>
              </thead>
              	<tbody>
            			@foreach ($categories as $category)
              			<tr>
              				<td data-title="ID">{{$category->id}}</td>
            					<td data-title="Category Name">{{$category->name}}</td>
            					<td data-title="Description">{{$category->description}}</td>
                      <td data-title="Actions">
                        <div class="row">
                          <div class="col-lg-4 col-xs-6">
                            <a class="btn btn-primary btn-xs" href="{{action('CategoryController@edit', $category->id)}}" >
                              <span class="glyphicon glyphicon-pencil"></span>
                            </a>                 
                          </div>
                          <div class="col-lg-4 col-xs-6">
  	                    	    <form action="{{action('CategoryController@destroy', $category->id)}}" method="post">
  						 	              {{csrf_field()}}
  							               <input name="_method" type="hidden" value="DELETE">
      						            <button class="btn btn-danger btn-xs" type="submit">
                                <span class="glyphicon glyphicon-trash"></span>
                              </button>
                            </form>
                          </div>
                        </div>
                      </td>
              			</tr>
            			@endforeach
              	</tbody>
      		</table>
          <div class="datatable-bottom">
            <div class="pull-left">
              <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                Showing {{ $categories->firstItem() }} - {{ $categories->lastItem() }} of {{ $categories->total() }}
              </div>
            </div>
            <div class="pull-right">
              {{$categories->links()}}
            </div>
          </div>
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