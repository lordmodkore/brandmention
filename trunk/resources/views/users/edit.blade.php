@extends ('layouts.app')
@section ('title', 'Edit your profile')
@section ('content')
        <div class="page-title">
          <div class="title">User Profile</div>
          <div class="sub-title"></div>
        </div>
        <form id="wizardForm" class="form-horizontal" method="POST" action="" role="form">
        	{{ csrf_field() }}
          <div class="card">
            <div class="card-block p-a-0">
              <div class="box-tab m-b-0" id="rootwizard">
                <ul class="wizard-tabs">
                  <li><a class="active" href="#tab1"  data-toggle="tab">Account details</a>
                  </li>
                  <li><a href="#tab2" data-toggle="tab">Your profile</a>
                  </li>
                  <li><a href="#tab4" data-toggle="tab">Additional information</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active p-x-lg" id="tab1">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email address</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="{{$user->email}}" value="{{ old('email') }}"  id="email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="password" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Confirm password</label>
                      <div class="col-sm-4">
                       	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane p-x-lg" id="tab2">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Short bio</label>
                      <div class="col-sm-4">
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Job description</label>
                      <div class="col-sm-4">
                        <select class="form-control" id="description" name="description">
                          <option>Human resources</option>
                          <option>Frontend developer</option>
                          <option>Backend developer</option>
                          <option>Network engineer</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Interests</label>
                      <div class="col-sm-4 pt5 mt2">
                        <label class="cb-checkbox">
                          <input type="checkbox" name="interests" value="hr" />Human resources
                        </label>
                        <br>
                        <label class="cb-checkbox">
                          <input type="checkbox" name="interests" value="chess" />Chess
                        </label>
                        <br>
                        <label class="cb-checkbox">
                          <input type="checkbox" name="interests" value="soccer" />Soccer
                        </label>
                        <br>
                        <label class="cb-checkbox">
                          <input type="checkbox" name="interests" value="web" />Web design
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane p-x-lg" id="tab4">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Gender</label>
                      <div class="col-sm-4 pt5 mt2">
                        <label class="cb-radio">
                          <input type="radio" name="gender" value="male" />male
                        </label>
                        <br>
                        <label class="cb-radio">
                          <input type="radio" name="gender" value="female" />Female
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nationality</label>
                      <div class="col-sm-4">
                        <select class="form-control">
                          <option>American</option>
                          <option>Italian</option>
                          <option>South African</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Number of children</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control required">
                      </div>
                    </div>
                  </div>
					<ul class="pager wizard wizard-pager">
						<li class="previous button-previous"><a href="javascript:;">Previous</a></li>
					  	<li class="next button-next"><a href="javascript:;">Next</a></li>
						<li class="finish pull-right"><a href="javascript:;">Update</a></li>
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
@endsection