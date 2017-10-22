@extends ('layouts.app')
@section ('title', 'Add New Website')
@section('styles')
	<link href="{{ asset('vendor/multiselect/css/multi-select.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/ui-select/dist/select.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/select2/dist/css/select2.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/selectize/dist/css/selectize.css') }}" rel="stylesheet">
@endsection
@section ('content')
<div class="page-title">
	<div class="title">Add A New Category</div>
</div>
<div class="card bg-white">
  <div class="card-header">Category Information</div>
  <div class="card-block">
    <form role="form" class="form-validation" method="POST" action="{{route('categories.store')}}">
         	{{ csrf_field() }}

		<div class="form-group m-b">
			<label>First Name</label>
			<input required type="text" class="form-control" id="firstname" name="firstname" required>
		</div>
	  	<div class="form-group m-b">
	    	<label>Last Name</label>
	    	<input type="text" class="form-control" name="lastname" id="lastname" required />
	  	</div>
  		<div class="form-group">
        <button class="btn btn-primary m-r">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
@section ('scripts')
  	<script src="{{ asset('vendor/chosen_v1.4.0/chosen.jquery.min.js') }}"></script>
 	<script src="{{ asset('vendor/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
	<script src="{{ asset('vendor/checkbo/src/0.1.4/js/checkBo.min.js') }}"></script>
	<script src="{{ asset('vendor/intl-tel-input//build/js/intlTelInput.min.js')}}"></script>
	<script src="{{ asset('vendor/moment/min/moment.min.js') }}"></script>
 	<script src="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
 	<script src="{{ asset('vendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
 	<script src="{{ asset('vendor/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
	<script src="{{ asset('vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
	<script src="{{ asset('vendor/select2/dist/js/select2.js')}}"></script>
	<script src="{{ asset('vendor/selectize/dist/js/standalone/selectize.min.js')}}"></script>
	<script src="{{ asset('vendor/jquery-labelauty/source/jquery-labelauty.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"></script>
	<script src="{{ asset('vendor/typeahead.js/dist/typeahead.bundle.js')}}"></script>
	<script src="{{ asset('vendor/multiselect/js/jquery.multi-select.js')}}"></script>
	<script src="{{ asset('vendor/fastclick/lib/fastclick.js') }}"></script>
 	<script src="{{ asset('js/constants.js') }}"></script>
 	<script src="{{ asset('vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
	<script src="{{ asset('js/forms/wizard.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
  	<script src="{{ asset('js/helpers/smartresize.js') }}"></script>
  	<script src="{{ asset('js/forms/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection