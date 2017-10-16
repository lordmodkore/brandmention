@extends ('layouts.app')
@section ('title', 'Edit your profile')
@section ('content')
        <div class="page-title">
          <div class="title">User Profile</div>
          <div class="sub-title"></div>

        </div>
          <form id="wizardForm" class="form-horizontal " method="POST" action="{{action('UserController@update', $users->id)}}" role="form">
        	{{ csrf_field() }}
        	 <input name="_method" type="hidden" value="PATCH">
          <div class="card">
            <div class="card-block p-a-0">
              <div class="box-tab m-b-0" id="rootwizard">
                <ul class="wizard-tabs">
                  <li><a class="active" href="#tab1"  data-toggle="tab">Account details</a>
                  </li>
                  <li><a href="#tab2" data-toggle="tab">Your profile</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div class="tab-pane active p-x-lg" id="tab1">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email address</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{ old('email',$users->email) }}"  id="email" name="email" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" placeholder="Enter new password" id="password" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Confirm password</label>
                      <div class="col-sm-4">
                       	<input id="password-confirm" type="password"  placeholder="Confirm password"  class="form-control" name="password_confirmation">
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane p-x-lg" id="tab2">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">First Name</label>
                      <div class="col-sm-4">
                    	<input id="firstname" type="text" value="{{ old('password',$users->firstname) }}" class="form-control" name="firstname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Last Name</label>
                      <div class="col-sm-4">
                  		<input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname',$users->lastname) }}" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Company name</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="company_name" type="text" value="{{ old('company_name',$users->company_name) }}"  class="form-control" name="company_name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Company address</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<textarea id="lastname" type="text" class="form-control" value="{{ old('company_address',$users->company_address) }}" name="company_address"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Street Address</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="street_address" type="text" class="form-control" name="street_address" value="{{ old('street_address',$users->street_address) }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">City</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			  <input id="city" type="text" class="form-control" name="city" value="{{ old('city',$users->city) }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Country</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="country" type="text" value="{{ old('country',$users->country) }}" class="form-control" name="country">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Post Code</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="postcode" value="{{ old('post_code',$users->postcode) }}" type="text" class="form-control" name="postcode">
                      </div>
                    </div>
                  </div>
        					<ul class="pager wizard wizard-pager">
        						  <li class="previous button-previous"><a href="javascript:;">Previous</a></li>
        					  	<li class="next button-next"><a href="javascript:;">Next</a></li>
        						  <li class="finish pull-right"><button type="submit" class="btn"> Update</button></li>
        					</ul>
                </div>
              </div>
            </div>
          </div>
        </form>
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
    <script src="{{ asset('js/forms/gmap.js') }}"></script>
@endsection