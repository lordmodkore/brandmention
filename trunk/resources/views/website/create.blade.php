@extends ('layouts.app')
@section ('title', 'Add New Website')
@section ('content')
<div class="page-title">
	<div class="title">Add Website</div>
</div>
<div class="card bg-white">
  <div class="card-header">Add Websites</div>
  <div class="card-block">
    <form role="form" class="form-validation" method="POST" action="{{route('website.store')}}">
         	{{ csrf_field() }}

		<div class="form-group m-b">
			<label>Website URL</label>
			<input type="url" class="form-control" id="url" name="url">
		</div>
	  	<div class="form-group m-b">
	    	<label>Costs</label>
	    	<input type="number" class="form-control" name="costs" id="costs"/>
	  	</div>
		<div class="form-group m-b">
        	<label>Currency</label>
			<input type="text" class="form-control" name="currency" id="currency"/>
      	</div>
		<div class="form-group m-b">
			<label>Categories</label>
        	<input type="text" class="form-control" name="categories" id="categories"/>
		</div>
		<div class="form-group m-b">
			<label>Language</label>
			<input type="text" class="form-control" name="language" id="language"/>
		</div>
		<div class="form-group m-b">
	      <div class="radio">
	        <label>
	          <input type="radio" name="f_n">Follow</label>
	      </div>
          <div class="radio">
            <label>
              <input type="radio" name="f_n">No Follow</label>
          </div>
      	</div>
		<div class="form-group m-b">
			<label>Processing Time(Days)</label>
			<input type="text" class="form-control" name="processing_time" id="processing_time"/>
		</div>
		<div class="form-group m-b">
			<label>Example Post</label>
			<input type="text" class="form-control" name="example" id="example"/>
		</div>
		<div class="form-group m-b">
			<label>Note</label>
			<textarea class="form-control" name="note" id="note"></textarea>
		</div>
  		<div class="form-group">
        <button class="btn btn-primary m-r">Submit</button>
      </div>
    </form>
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