
@extends ('layouts.app')
@section ('title', 'All Users')
@section ('content')
	<div class="page-title">
      	<div class="title">List All Users</div>
      	<div class="sub-title">Manage all users</div>
    </div>
        <div class="card bg-white">
      		<div class="card-header">
        		All Users
      		</div>
          <div class="card-block">
            <div class="no-more-tables">
              <table class="table table-bordered table-striped m-b-0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach ($users as $user)
	                  <tr>
	                    <td data-title="ID">{{$user->id}}</td>
	                    <td data-title="Full Name">{{$user->firstname}}&nbsp;{{$user->lastname}}</td>
	                    <td data-title="Email">{{$user->email}}</td>
	                    <td data-title="Phone">{{$user->phone}}</td>
	                    <td data-title="Company">{{$user->company_name}}</td>
	                    <td>
	                    	<form action="{{action('UserController@destroy', $user->id)}}" method="post">
						 	{{csrf_field()}}
							<input name="_method" type="hidden" value="DELETE">
    						 <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button></td>
	                  </tr>
                 	 @endforeach

                </tbody>


              </table>
              	<div class="datatable-bottom">
              		<div class="pull-left">
	              		<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
	              			Showing {{ $users->firstItem() }} - {{ $users->lastItem() }} of {{ $users->total() }}
	              		</div>
              		</div>
              		<div class="pull-right">
              			{{$users->links()}}
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
    <script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/checkbo/src/0.1.4/js/checkBo.min.js') }}"></script>
    <script src="{{ asset('vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('js/forms/wizard.js') }}"></script>
@endsection