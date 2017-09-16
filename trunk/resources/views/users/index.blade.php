@extends ('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="main-content">
        <div class="m-x-n-g m-t-n-g overflow-hidden">
          <div class="card m-b-0 bg-primary-dark text-white p-a-md no-border">
            <h4 class="m-t-0">
              <span class="pull-right">$ 82,560.00 This week</span>
              <span>Activity</span>
              </h4>
            <div class="chart dashboard-line labels-white" style="height:300px"></div>
          </div>
          <div class="card bg-white no-border">
            <div class="row text-center">
              <div class="col-sm-3 col-xs-6 p-t p-b">
                <h4 class="m-t-0 m-b-0">$ 89.34</h4>
                <small class="text-muted bold">Daily Sales</small>
              </div>
              <div class="col-sm-3 col-xs-6 p-t p-b">
                <h4 class="m-t-0 m-b-0">$ 498.00</h4>
                <small class="text-muted bold">Weekly Sales</small>
              </div>
              <div class="col-sm-3 col-xs-6 p-t p-b">
                <h4 class="m-t-0 m-b-0">$ 34,903</h4>
                <small class="text-muted bold">Monthly Sales</small>
              </div>
              <div class="col-sm-3 col-xs-6 p-t p-b">
                <h4 class="m-t-0 m-b-0">$ 98,343.49</h4>
                <small class="text-muted bold">Yearly Sales</small>
              </div>
            </div>
          </div>
        </div>
        <div class="row same-height-cards">
          <div class="col-md-8">
            <div class="card no-border bg-white">
              <div class="card-block row-equal align-middle">
                <div class="column p-r">
                  <div class="h6 text-uppercase">Donec sed odio dui.</div>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  <div class="widget-card-title">
                    <div class="pull-right">
                      <span class="m-r"><i class="icon-bar-chart text-primary"></i>&nbsp;Visitors</span>
                      <span><i class="icon-bar-chart text-success"></i>&nbsp;Conversion</span>
                    </div>
                    <h5 class="text-success">$ 56,873</h5>
                  </div>
                </div>
                <div class="column p-l">
                  <div class="dashboard-barO" style="height:200px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card no-border bg-white">
              <div class="card-block">
                <div class="text-center p-a">
                  <h4 class="card-title p-a-lg m-b-0">Etiam porta sem malesuada magna mollis euismod.</h4>
                </div>
                <div class="">
                  <a href="#" class="card-link pull-right"><i class="icon-clock"></i>&nbsp;20m ago</a>
                  <a href="#" class="card-link m-l-0">website.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card card-block no-border bg-primary">
              <div class="card-title text-center">
                <h5 class="m-a-0 text-uppercase">Weekly projections</h5>
                <small>the quick brew</small>
              </div>
              <div class="canvas-holder">
                <div class="chart labels-white dashboard-bar2" style="height:71px"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="row">
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">dax</h6>
                    <small class="bold text-muted">10,499.71</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-danger">-2.56%</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">Appl</h6>
                    <small class="bold text-muted">114.72</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-success">+0.84%</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">Dow j</h6>
                    <small class="bold text-muted">17,392.22</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-danger">-1.30%</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">Goog</h6>
                    <small class="bold text-muted">651.23</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-success">+1.34%</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="card card-block no-border bg-white">
              <div class="circle-icon bg-info text-white m-r">
                <i class="icon-bulb"></i>
              </div>
              <div class="overflow-hidden" style="margin-top:1px;">
                <h4 class="m-a-0">932K</h4>
                <h6 class="m-a-0 text-muted">Registered users</h6>
              </div>
            </div>
            <div class="card card-block no-border bg-white">
              <div class="circle-icon bg-danger text-white m-r">
                <i class="icon-user"></i>
              </div>
              <div class="overflow-hidden" style="margin-top:1px;">
                <h4 class="m-a-0">8.3K</h4>
                <h6 class="m-a-0 text-muted">Revenue increase</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row same-height-cards">
          <div class="col-md-4">
            <div class="card no-border bg-dark text-white">
              <div class="card-img-overlay p-a-0" style="background: url(images/unsplash/img3.jpeg) no-repeat; background-size: cover;"></div>
              <div class="card-block">
                <div class="">
                  <i class="icon-info pull-right"></i>
                  <h5 class="text-white m-a-0">Visits</h5>
                </div>
                <div class="block m-y dashboard-line2" style="height:150px"></div>
                <div class="">
                  <h5 class="text-white m-a-0 pull-right">Returning: <span class="text-info">456</span></h5>
                  <h5 class="text-white m-a-0">New: <span class="text-info">78</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-white no-border relative" style="min-height:250px">
              <div class="slide absolute tp lt rt bt" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner" role="listbox">
                  <div class="item active" style="background-image:url(http://lorempixel.com/400/400);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;width:100%;height:100%;">
                  </div>
                  <div class="item" style="background-image:url(http://lorempixel.com/400/400?2);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;width:100%;height:100%;">
                  </div>
                  <div class="item" style="background-image:url(http://lorempixel.com/400/400?3);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;width:100%;height:100%;">
                  </div>
                </div>
              </div>
              <div class="absolute tp lt rt bt" style="background:rgba(0,0,0,.1)"></div>
              <div class="card-block">
                <div class="block text-right">
                  <i class="icon-action-redo"></i>
                </div>
                <div class="absolute lt rt bt p-a">
                  <h4>Meet Reactor. Beautifully designed <br>admin pack.</h4>
                  <div class="block">
                    <a href="#" class="card-link m-r-lg">website.com</a>
                    <a href="#" class="card-link"><i class="icon-clock"></i>&nbsp;20m ago</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-warning text-white no-border overflow-hidden" style="min-height:250px">
              <div class="card-block">
                <div class="row">
                  <div class="col-xs-6">
                    <div class="climacon cloud moon fa-5x"></div>
                    <div class="h5 m-a-0">Mostly cloudy</div>
                    <div class="h6 m-a-0">New York</div>
                  </div>
                  <div class="col-xs-6 text-right">
                    <div class="bg-white absolute shadow circle" style="width: 240px;height:240px; top:-100px;right:-80px;"></div>
                    <div class="h1 relative text-color" style="font-size:70px;">76&#176;</div>
                  </div>
                  <div class="text-center absolute lt rt bt p-b">
                    <div class="row-equal">
                      <div class="column">
                        <div class="degree-value bold">23&#176;</div>
                        <div class="small">MON</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">65&#176;</div>
                        <div class="small">TUE</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">45&#176;</div>
                        <div class="small">WED</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">23&#176;</div>
                        <div class="small">THU</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">54&#176;</div>
                        <div class="small">FRI</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">22&#176;</div>
                        <div class="small">SAT</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">45&#176;</div>
                        <div class="small">SAT</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">08&#176;</div>
                        <div class="small">SAT</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row same-height-cards">
          <div class="col-md-4">
            <div class="card bg-primary text-white">
              <div class="p-x p-b">
                <div class="text-center" style="margin:120px 0;">
                  <h2 class="m-a-0 text-uppercase">Swiftly</h2>
                  <small class="text-uppercase">and with style</small>
                </div>
                <div class="absolute lt rt bt p-a">
                  <a href="#" class="card-link pull-right"><i class="icon-clock"></i>&nbsp;20m ago</a>
                  <a href="#" class="card-link m-l-0">website.com</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-danger">
              <div class="p-x p-b">
                <div class="text-center" style="margin:105px 0 104px;">
                  <div class="card-circle-icon bg-white icon-bell m-b-md"></div>
                  <div class="text-white">Donec ullamcorper nulla non metus auctor fringilla.</div>
                </div>
                <div class="absolute lt rt bt p-a text-white">
                  <a href="#" class="card-link bold text-uppercase pull-right">Done</a>
                  <a href="#" class="card-link bold text-uppercase m-l-0">Back</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card row-equal align-middle bg-white no-border">
              <div class="column p-a relative">
                <div class="text-center" style="margin:100px 0;">
                  <h4>Etiam porta sem malesuada magna mollis euismod.</h4>
                </div>
                <div class="absolute lt rt bt p-a">
                  <a href="#" class="card-link pull-right"><i class="icon-clock"></i>&nbsp;20m ago</a>
                  <a href="#" class="card-link m-l-0">website.com</a>
                </div>
              </div>
              <div class="column" style="background: url(images/unsplash/img2.jpeg) no-repeat; background-size: cover;background-position: center center;">
                &nbsp;
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card no-border">
              <div class="card-block">
                <div class="text-center">
                  <h6>The summer of 2015</h6>
                  <h3 class="m-t">New brew flavor</h3>
                  <p>Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
                <div class="text-center">
                  <img src="images/cactus.png" class="img-responsive center-block relative" alt="" style="max-width: 230px;left: 1rem;">
                </div>
                <div class="text-center">
                  <a href="#" class="btn btn-primary btn-sm">Place Order</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-white no-border">
              <div class="p-a bb">
                NOTIFICATIONS
              </div>
              <ul class="notifications">
                <li>
                  <ul class="notifications-list">
                    <li>
                      <a href="javascript:;">
                        <div class="notification-icon">
                          <div class="circle-icon bg-success text-white">
                            <i class="icon-bulb"></i>
                          </div>
                        </div>
                        <span class="notification-message"><b>Sean</b> launched a new application</span>
                        <span class="time">2s</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <div class="notification-icon">
                          <div class="circle-icon bg-danger text-white">
                            <i class="icon-cursor"></i>
                          </div>
                        </div>
                        <span class="notification-message"><b>Removed calendar</b> from app list</span>
                        <span class="time">4h</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <div class="notification-icon">
                          <div class="circle-icon bg-primary text-white">
                            <i class="icon-basket"></i>
                          </div>
                        </div>
                        <span class="notification-message"><b>Denise</b> bought <b>Urban Admin Kit</b></span>
                        <span class="time">2d</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <div class="notification-icon">
                          <div class="circle-icon bg-info text-white">
                            <i class="icon-bubble"></i>
                          </div>
                        </div>
                        <span class="notification-message"><b>Vincent commented</b> on one of your items</span>
                        <span class="time">2s</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="card card-block no-border bg-primary text-white">
                  <h6 class="m-a-0">NEW USERS</h6>
                  <h1 class="m-a-0">785</h1>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card card-block no-border bg-dark text-white">
                  <h6 class="m-a-0">PAGE VIEWS</h6>
                  <h1 class="m-a-0">381</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-block bg-white p-b-0 no-border">
              <div class="pie-chart m-b-md m-t-md" style="height:150px"></div>
              <div class="text-center m-b-md">
                <div class="text-muted text-uppercase">Total</div>
                <h5 class="m-a-0">48 Kilometers</h5>
              </div>
              <ul class="list-unstyled m-x-n m-b-0">
                <li class="b-t p-a-md">
                  <span class="pull-right">45,677</span>
                  <i class="fa fa-circle text-primary m-r"></i> Accelaration
                </li>
                <li class="b-t p-a-md">
                  <span class="pull-right">234,456</span>
                  <i class="fa fa-circle text-info m-r"></i> Braking
                </li>
                <li class="b-t p-a-md">
                  <span class="pull-right">43,554</span>
                  <i class="fa fa-circle text-warning m-r"></i> Cornering
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection
@section ('sidebar')
    <div class="sidebar-panel offscreen-left">
      <div class="brand">
        <!-- toggle small sidebar menu -->
        <div class="col-md-2 col-md-push-10">
          <a href="javascript:;" class="toggle-apps hidden-xs" data-toggle="quick-launch">
            <i class="icon-grid"></i>
          </a>
        </div>
        <!-- /toggle small sidebar menu -->
        <!-- toggle offscreen menu -->
        <div class="toggle-offscreen">
          <a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
        <!-- /toggle offscreen menu -->
          <!-- logo -->
          <div class="brand-logo col-md-10 col-md-pull-2">
            <img src="{{URL::asset('images/logo.png')}}" />
          </div>
          <!-- /logo -->
        <a href="#" class="small-menu-visible brand-logo">BM</a>
        <!-- /logo -->
      </div>
      <ul class="quick-launch-apps hide">
        <li>
          <a href="apps-gallery.html">
            <span class="app-icon bg-danger text-white">
            G
            </span>
            <span class="app-title">Gallery</span>
          </a>
        </li>
        <li>
          <a href="apps-messages.html">
            <span class="app-icon bg-success text-white">
            M
            </span>
            <span class="app-title">Messages</span>
          </a>
        </li>
        <li>
          <a href="apps-social.html">
            <span class="app-icon bg-primary text-white">
            S
            </span>
            <span class="app-title">Social</span>
          </a>
        </li>
        <li>
          <a href="apps-travel.html">
            <span class="app-icon bg-info text-white">
            T
            </span>
            <span class="app-title">Travel</span>
          </a>
        </li>
      </ul>
      <!-- main navigation -->
      <nav role="navigation">
        <ul class="nav">
          <!-- dashboard -->
          <li>
            <a href="index.html">
              <i class="icon-compass"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <!-- /dashboard -->
          <!-- customizer -->
          <li>
            <a href="http://customizer.nyasha.me/#reactor" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Customize</span>
            </a>
          </li>
          <!-- /customizer -->
          <!-- cards -->
          <li>
            <a href="javascript:;">
              <span class="badge pull-right">4</span>
              <i class="icon-drop"></i>
              <span>Cards</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="cards-basic.html">
                  <span>Basic</span>
                </a>
              </li>
              <li>
                <a href="cards-portlets.html">
                  <span>Portlets</span>
                </a>
              </li>
              <li>
                <a href="cards-draggable.html">
                  <span>Draggable</span>
                </a>
              </li>
              <li>
                <a href="cards-widgets.html">
                  <span>Widgets</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /cards -->
          <!-- apps -->
          <li>
            <a href="javascript:;">
              <i class="icon-cursor"></i>
              <span>Apps</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="apps-calendar.html">
                  <span>Calendar</span>
                </a>
              </li>
              <li>
                <a href="apps-gallery.html">
                  <span>Gallery</span>
                </a>
              </li>
              <li>
                <a href="apps-messages.html">
                  <span>Messages</span>
                </a>
              </li>
              <li>
                <a href="apps-social.html">
                  <span>Social</span>
                </a>
              </li>
              <li>
                <a href="apps-projects.html">
                  <span>Projects</span>
                </a>
              </li>
              <li>
                <a href="apps-contacts.html">
                  <span>Contacts</span>
                </a>
              </li>
              <li>
                <a href="apps-travel.html">
                  <span>Travel</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /apps -->
          <!-- commerce -->
          <li>
            <a href="javascript:;">
              <i class="icon-bag"></i>
              <span>Commerce</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="commerce-products.html">
                  <span>Products</span>
                </a>
              </li>
              <li>
                <a href="commerce-cart.html">
                  <span>Cart</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /commerce -->
          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="icon-book-open"></i>
              <span>Elements</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="ui-buttons.html">
                  <span>Buttons</span>
                </a>
              </li>
              <li>
                <a href="ui-social-buttons.html">
                  <span>Social buttons</span>
                </a>
              </li>
              <li>
                <a href="ui-general.html">
                  <span>General</span>
                </a>
              </li>
              <li>
                <a href="ui-tabs.html">
                  <span>Tabs</span>
                </a>
              </li>
              <li>
                <a href="ui-progressbars.html">
                  <span>Progress bars</span>
                </a>
              </li>
              <li>
                <a href="ui-pagination.html">
                  <span>Pagination</span>
                </a>
              </li>
              <li>
                <a href="ui-sliders.html">
                  <span>Sliders</span>
                </a>
              </li>
              <li>
                <a href="ui-notifications.html">
                  <span>Notifications</span>
                </a>
              </li>
              <li>
                <a href="ui-spinners.html">
                  <span>Spinners</span>
                </a>
              </li>
              <li>
                <a href="ui-colors.html">
                  <span>Colors</span>
                </a>
              </li>
              <li>
                <a href="ui-alerts.html">
                  <span>Alerts</span>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="toggle-accordion"></i>
                  <span>Icons</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="ui-icons-sli.html">
                      <span>SLI</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui-icons-fontawesome.html">
                      <span>Fontawesome</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui-icons-climacons.html">
                      <span>Climacons</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- /ui -->
          <!-- forms -->
          <li>
            <a href="javascript:;">
              <i class="icon-loop"></i>
              <span>Forms</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="forms-basic.html">
                  <span>Basic</span>
                </a>
              </li>
              <li>
                <a href="forms-custom.html">
                  <span>Custom</span>
                </a>
              </li>
              <li>
                <a href="forms-plugins.html">
                  <span>Plugins</span>
                </a>
              </li>
              <li>
                <a href="forms-wizard.html">
                  <span>Wizard</span>
                </a>
              </li>
              <li>
                <a href="forms-editors.html">
                  <span>Editors</span>
                </a>
              </li>
              <li>
                <a href="forms-validation.html">
                  <span>Validation</span>
                </a>
              </li>
              <li>
                <a href="forms-masks.html">
                  <span>Masks</span>
                </a>
              </li>
              <li>
                <a href="forms-upload.html">
                  <span>Upload</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /forms -->
          <!-- tables -->
          <li>
            <a href="javascript:;">
              <i class="icon-share-alt"></i>
              <span>Tables</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="tables-basic.html">
                  <span>Basic</span>
                </a>
              </li>
              <li>
                <a href="tables-responsive.html">
                  <span>Responsive</span>
                </a>
              </li>
              <li>
                <a href="tables-datatables.html">
                  <span>Datatables</span>
                </a>
              </li>
              <li>
                <a href="tables-editable.html">
                  <span>Editable</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /tables -->
          <!-- charts -->
          <li>
            <a href="javascript:;">
              <i class="icon-pie-chart"></i>
              <span>Charts</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="charts-flot.html">
                  <span>Flot</span>
                </a>
              </li>
              <li>
                <a href="charts-easypie.html">
                  <span>Easypie</span>
                </a>
              </li>
              <li>
                <a href="charts-chartjs.html">
                  <span>Chartjs</span>
                </a>
              </li>
              <li>
                <a href="charts-rickshaw.html">
                  <span>Rickshaw</span>
                </a>
              </li>
              <li>
                <a href="charts-nvd3.html">
                  <span>nvd3</span>
                </a>
              </li>
              <li>
                <a href="charts-c3js.html">
                  <span>C3js</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /charts -->
          <!-- maps -->
          <li>
            <a href="javascript:;">
              <i class="icon-pointer"></i>
              <span>Maps</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="maps-google.html">
                  <span>Google</span>
                </a>
              </li>
              <li>
                <a href="maps-vector.html">
                  <span>Vector</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /maps -->
          <!-- extras -->
          <li>
            <a href="javascript:;">
              <i class="icon-tag"></i>
              <span>Extras</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="extras-invoice.html">
                  <span>Invoice</span>
                </a>
              </li>
              <li>
                <a href="extras-timeline.html">
                  <span>Timeline</span>
                </a>
              </li>
              <li>
                <a href="extras-timeline-stacked.html">
                  <span>Stacked timeline</span>
                </a>
              </li>
              <li>
                <a href="extras-post.html">
                  <span>Post</span>
                </a>
              </li>
              <li>
                <a href="extras-sortable.html">
                  <span>Sortable</span>
                </a>
              </li>
              <li>
                <a href="extras-nestable.html">
                  <span>Nestable</span>
                </a>
              </li>
              <li>
                <a href="extras-signin.html">
                  <span>Signin</span>
                </a>
              </li>
              <li>
                <a href="extras-signin2.html">
                  <span>Signin v2</span>
                </a>
              </li>
              <li>
                <a href="extras-signup.html">
                  <span>Signup</span>
                </a>
              </li>
              <li>
                <a href="extras-signup2.html">
                  <span>Signup v2</span>
                </a>
              </li>
              <li>
                <a href="extras-forgot.html">
                  <span>Forgot</span>
                </a>
              </li>
              <li>
                <a href="extras-lockscreen.html">
                  <span>Lockscreen</span>
                </a>
              </li>
              <li>
                <a href="extras-404.html">
                  <span>404 page</span>
                </a>
              </li>
              <li>
                <a href="extras-500.html">
                  <span>500 page</span>
                </a>
              </li>
              <li>
                <a href="blank.html">
                  <span>Starter</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /extras -->
          <!-- menu levels -->
          <li>
            <a href="javascript:;">
              <i class="icon-frame"></i>
              <span>Menu Level</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;">
                  <i class="toggle-accordion"></i>
                  <span>Level</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="javascript:;">
                      <i class="toggle-accordion"></i>
                      <span>Level</span>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="javascript:;">
                          <span>Level</span>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <span>Level</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span>Level</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;">
                  <span>Level</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- menu levels -->
          <!-- documentation -->
          <li>
            <a href="http://reactor.nyasha.me/documentation" target="_blank">
              <i class="icon-layers"></i>
              <span>Documentation</span>
            </a>
          </li>
          <!-- /documentation -->
          <!-- static -->
          <li>
            <a href="http://reactor.nyasha.me/angular" target="_blank">
              <i class="icon-control-play"></i>
              <span>Angular version</span>
            </a>
          </li>
          <!-- /static -->
        </ul>
      </nav>
      <!-- /main navigation -->
    </div>
@endsection