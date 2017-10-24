@extends ('layouts.app')
@section ('title', 'Bookings')
@section ('content')
        <div class="page-title">
          <div class="title">Add Bookings</div>
          <div class="sub-title">Add new Booking</div>

        </div>
          <form id="wizardForm" class="form-horizontal " method="POST" action="" role="form">
        	{{ csrf_field() }}
          <div class="card">
            <div class="card-block p-a-0">
              <div class="box-tab m-b-0" id="rootwizard">
                <ul class="wizard-tabs">
                  <li><a class="active" href="#tab1"  data-toggle="tab">Select Website to Book</a>
                  </li>
                  <li><a href="#tab2" data-toggle="tab">Select Website to Book</a>
                  </li>
                </ul>
                <!--first tab-->
                <div class="tab-content">
                  <div class="tab-pane active p-x-lg" id="tab1">
                    <div class="card-block">
                      <div class="no-more-tables">
                        <table class="table table-bordered table-striped m-b-0">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Url</th>
                                <th>Publisher</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                              <tbody>
                                @foreach ($websites as $website)
                                  <tr>
                                    <td data-title="ID">{{$website->id}}</td>
                                    <td data-title="Url">{{$website->url}}</td>
                                    <td data-title="Publisher">
                                      @foreach($website->publishers as $publisher)
                                        {{ $loop->first ? '' : '/' }}
                                        {{$publisher->firstname ."&nbsp;".$publisher->lastname }}
                                      @endforeach
                                    </td>
                                    <td data-title="Actions">
                                      <div class="row">
                                        <div class="col-lg-4 col-xs-6">
                                          <a class="btn btn-primary btn-xs" href="#" >
                                            <span class="glyphicon glyphicon-pencil"></span>
                                          </a>                 
                                        </div>
                                        <div class="col-lg-4 col-xs-6">
                                            <form action="" method="post">
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
                  </div><!--./tab-pane-->
                  <!--start second tab-->
                  <div class="tab-pane p-x-lg" id="tab2">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">First Name</label>
                      <div class="col-sm-4">
                    	<input id="firstname" type="text" value="" class="form-control" name="firstname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Last Name</label>
                      <div class="col-sm-4">
                  		<input id="lastname" type="text" class="form-control" name="lastname" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Company name</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="company_name" type="text" value=""  class="form-control" name="company_name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Company address</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<textarea id="lastname" type="text" class="form-control" value="" name="company_address"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Street Address</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="street_address" type="text" class="form-control" name="street_address" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">City</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			  <input id="city" type="text" class="form-control" name="city" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Country</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="country" type="text" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Post Code</label>
                      <div class="col-sm-4 pt5 mt2">
      		     			<input id="postcode" >
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