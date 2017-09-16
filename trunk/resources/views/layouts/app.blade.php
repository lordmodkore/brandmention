<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title>Brand Mention | @yield('title')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- page stylesheets -->
  <!-- end page stylesheets -->
  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link href="{{ asset('css/webfont.css') }}" rel="stylesheet">
  <link href="{{ asset('css/climacons-font.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
  <link href="{{ asset('css/card.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sli.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- endbuild -->
</head>

<body class="page-loading">
  <!-- page loading spinner -->
  <div class="pageload">
    <div class="pageload-inner">
      <div class="sk-rotating-plane"></div>
    </div>
  </div>
  <!-- /page loading spinner -->
  <div class="app layout-fixed-header">
    <!-- sidebar panel -->
    @yield('sidebar')
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
      <!-- top header -->
      <div class="header navbar">
        <div class="brand visible-xs">
          <!-- toggle offscreen menu -->
          <div class="toggle-offscreen">
            <a href="javascript:;" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle offscreen menu -->
          <!-- logo -->
          <div class="brand-logo">
            <img src="{{URL::asset('images/logo.png')}}" />
          </div>
          <!-- /logo -->
        </div>
        <ul class="nav navbar-nav hidden-xs">
          <li>
            <a href="javascript:;" class="small-sidebar-toggle ripple" data-toggle="layout-small-menu">
              <i class="icon-toggle-sidebar"></i>
            </a>
          </li>
          <li class="searchbox">
            <a href="javascript:;" data-toggle="search">
              <i class="search-close-icon icon-close hide"></i>
              <i class="search-open-icon icon-magnifier"></i>
            </a>
          </li>
          <li class="navbar-form search-form hide">
            <input type="search" class="form-control search-input" placeholder="Start typing...">
            <div class="search-predict hide">
              <a href="#">Searching for 'purple rain'</a>
              <div class="heading">
                <span class="title">People</span>
              </div>
              <ul class="predictive-list">
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face1.jpg" class="img-circle" alt="">
                    <span>Tammy Carpenter</span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face2.jpg" class="img-circle" alt="">
                    <span>Catherine Moreno</span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face3.jpg" class="img-circle" alt="">
                    <span>Diana Robertson</span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face4.jpg" class="img-circle" alt="">
                    <span>Emma Sullivan</span>
                  </a>
                </li>
              </ul>
              <div class="heading">
                <span class="title">Page posts</span>
              </div>
              <ul class="predictive-list">
                <li>
                  <a class="avatar" href="#">
                    <img src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
                    <span>The latest news for cloud-based developers </span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
                    <span>Trending Goods of the Week</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs">
          <li>
            <a href="javascript:;" class="ripple" data-toggle="dropdown">
              <span>EN</span>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="javascript:;">English</a>
              </li>
              <li>
                <a href="javascript:;">Russian</a>
              </li>
              <li>
                <a href="javascript:;">French</a>
              </li>
              <li>
                <a href="javascript:;">Spanish</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="ripple" data-toggle="dropdown">
              <i class="icon-bell"></i>
            </a>
            <ul class="dropdown-menu notifications">
              <li class="notifications-header">
                <p class="text-muted small">You have 3 new messages</p>
              </li>
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
                      <span class="notification-message"><b>Vincent commented</b> on an item</span>
                      <span class="time">2s</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="notification-icon">
                      <img src="images/face3.jpg" class="avatar img-circle" alt="">
                      </span>
                      <span class="notification-message"><b>Jack Hunt</b> has <b>joined</b> mailing list</span>
                      <span class="time">9d</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="ripple" data-toggle="dropdown">
              <img src="images/avatar.jpg" class="header-avatar img-circle" alt="user" title="user">
              <?php 
                $user = Auth::user();
              ?>
               <?php if($user) : ?> 
                <span><?php echo Auth::user()->firstname;?></span>
                <span class="caret"></span>
              <?php endif;?>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="javascript:;">Settings</a>
              </li>
              <li>
                <a href="javascript:;">Upgrade</a>
              </li>
              <li>
                <a href="javascript:;">
                  <span class="label bg-danger pull-right">34</span>
                  <span>Notifications</span>
                </a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="javascript:;">Help</a>
              </li>
              <li> 
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                     Logout
               </a>
              </li>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="ripple" data-toggle="layout-chat-open">
              <i class="icon-user"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- /top header -->
      <!-- main area -->
      @yield('content')
      <!-- /main area -->
    </div>
    <!-- /content panel -->
    <!-- bottom footer -->
    <footer class="content-footer">
      <nav class="footer-right">
        <ul class="nav">
          <li>
            <a href="javascript:;">Feedback</a>
          </li>
          <li>
            <a href="javascript:;" class="scroll-up">
              <i class="fa fa-angle-up"></i>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="footer-left hidden-xs">
        <ul class="nav">
          <li>
            <a href="javascript:;"><span>About</span> Reactor</a>
          </li>
          <li>
            <a href="javascript:;">Privacy</a>
          </li>
          <li>
            <a href="javascript:;">Terms</a>
          </li>
          <li>
            <a href="javascript:;">Help</a>
          </li>
        </ul>
      </nav>
    </footer>
    <!-- /bottom footer -->
    <!-- chat -->
    <div class="chat-panel">
      <div class="chat-inner">
        <div class="chat-users">
          <div class="chat-group mb0">
            <div class="chat-group-header h4">
              Chat
            </div>
          </div>
          <div class="chat-group">
            <div class="chat-group-header">
              Favourites
            </div>
            <a href="javascript:;">
              <span class="status-online"></span>
              <span>Catherine Moreno</span>
            </a>
            <a href="javascript:;">
              <span class="status-online"></span>
              <span>Denise Peterson</span>
            </a>
            <a href="javascript:;">
              <span class="status-away"></span>
              <span>Charles Wilson</span>
            </a>
            <a href="javascript:;">
              <span class="status-away"></span>
              <span>Melissa Welch</span>
            </a>
            <a href="javascript:;">
              <span class="status-no-disturb"></span>
              <span>Vincent Peterson</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Pamela Wood</span>
            </a>
          </div>
          <div class="chat-group">
            <div class="chat-group-header">
              Online Friends
            </div>
            <a href="javascript:;">
              <span class="status-online"></span>
              <span>Tammy Carpenter</span>
            </a>
            <a href="javascript:;">
              <span class="status-away"></span>
              <span>Emma Sullivan</span>
            </a>
            <a href="javascript:;">
              <span class="status-no-disturb"></span>
              <span>Andrea Brewer</span>
            </a>
            <a href="javascript:;">
              <span class="status-online"></span>
              <span>Sean Carpenter</span>
            </a>
          </div>
          <div class="chat-group">
            <div class="chat-group-header">
              Offline
            </div>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Denise Peterson</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Jose Rivera</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Diana Robertson</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>William Fields</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Emily Stanley</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Jack Hunt</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Sharon Rice</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Mary Holland</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Diane Hughes</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Steven Smith</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Emily Henderson</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Wayne Kelly</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Jane Garcia</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Jose Jimenez</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Rachel Burton</span>
            </a>
            <a href="javascript:;">
              <span class="status-offline"></span>
              <span>Samantha Ruiz</span>
            </a>
          </div>
        </div>
        <div class="chat-conversation">
          <div class="chat-header">
            <a class="chat-back" href="javascript:;">
              <i class="icon-arrow-left"></i>
            </a>
            <div class="chat-header-title">
              Charles Wilson
            </div>
          </div>
          <div class="chat-conversation-content">
            <p class="text-center text-muted small text-uppercase bold pb15">
              Yesterday
            </p>
            <div class="chat-conversation-user them">
              <div class="chat-conversation-message">
                <p>Hey.</p>
              </div>
            </div>
            <div class="chat-conversation-user them">
              <div class="chat-conversation-message">
                <p>How are the wife and kids, Taylor?</p>
              </div>
            </div>
            <div class="chat-conversation-user me">
              <div class="chat-conversation-message">
                <p>Pretty good, Samuel.</p>
              </div>
            </div>
            <p class="text-center text-muted small text-uppercase bold pb15">
              Today
            </p>
            <div class="chat-conversation-user them">
              <div class="chat-conversation-message">
                <p>Curabitur blandit tempus porttitor.</p>
              </div>
            </div>
            <div class="chat-conversation-user me">
              <div class="chat-conversation-message">
                <p>Goodnight!</p>
              </div>
            </div>
            <div class="chat-conversation-user them">
              <div class="chat-conversation-message">
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
              </div>
            </div>
          </div>
          <div class="chat-conversation-footer">
            <button class="chat-input-tool">
              <i class="fa fa-camera"></i>
            </button>
            <div class="chat-input" contenteditable=""></div>
            <button class="chat-send">
              <i class="fa fa-paper-plane"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- /chat -->
  </div>

  <!-- build:js({.tmp,app}) scripts/app.min.js -->


<script src="{{ asset('js/helpers/modernizr.js') }}"></script>
<script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
<script src="{{ asset('js/helpers/smartresize.js') }}"></script>
<script src="{{ asset('js/constants.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('vendor/flot-spline/js/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('vendor/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('js/helpers/sameheight.js') }}"></script>
<script src="{{ asset('js/ui/dashboard.js') }}"></script>
  <!-- end initialize page scripts -->
</body>

</html>