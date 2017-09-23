@extends ('layouts.app')
@section ('title', 'Edit your profile')
@section ('content')
<div class="page-title">
	<div class="title">User Groups</div>
</div>
<div class="card bg-white">
  <div class="card-header">
   	Create user group
  </div>
  <div class="card-block">
    <form role="form" class="form-validation" method="POST" action="{{route('groups.store')}}">
         	{{ csrf_field() }}
      <div class="form-group m-b">
        <label>Name</label>
        <input type="text" class="form-control" id="description" name="name">
      </div>
      <div class="form-group m-b">
        <label>Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
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
@endsection