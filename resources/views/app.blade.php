<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Reodraplist</title>

  <link rel="apple-touch-icon" href="{{ url('assets/images/apple-touch-icon.png') }}">
  <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/site.min.css') }}">

  <link rel="stylesheet" href="{{ url('assets/vendor/animsition/animsition.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendor/asscrollable/asScrollable.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendor/switchery/switchery.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendor/intro-js/introjs.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendor/slidepanel/slidePanel.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendor/flag-icon-css/flag-icon.css') }}">

  <!-- Plugin -->
  <link rel="stylesheet" href="{{ url('assets/vendor/chartist-js/chartist.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendor/aspieprogress/asPieProgress.css') }}">

  <!-- Page -->
  <link rel="stylesheet" href="{{ url('assets/css/dashboard/v2.css') }}">
  <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ url('assets/fonts/web-icons/web-icons.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/fonts/brand-icons/brand-icons.min.css') }}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="{{ url('') }}assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{ url('') }}assets/vendor/media-match/media.match.min.js"></script>
    <script src="{{ url('') }}assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ url('assets/vendor/modernizr/modernizr.js') }}"></script>
  <script src="{{ url('assets/vendor/breakpoints/breakpoints.js') }}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="{{ url('') }}assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text"> Reodraplist</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            </a>
            <ul class="dropdown-menu" role="menu">
            </ul>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="{{ url('') }}assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="{{ url('') }}assets/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="{{ url('') }}assets/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="{{ url('') }}assets/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="{{ url('') }}assets/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <div class="site-menu-badge"></div>
              </a>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Manage</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/grids.html" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Jadwal</span>
                  </a>
                </li>
              </ul>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">List</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{url ('guru/all')}}" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">All</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{url ('guru/add')}}" data-slug="uikit-colors">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Setting</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/buttons.html" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Profil</span>
                  </a>
                </li>
              </ul>
            </li>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <div class="site-gridmenu">
    <ul>
      <li>
        <a href="../apps/mailbox/mailbox.html">
          <i class="icon wb-envelope"></i>
          <span>Mailbox</span>
        </a>
      </li>
      <li>
        <a href="../apps/calendar/calendar.html">
          <i class="icon wb-calendar"></i>
          <span>Calendar</span>
        </a>
      </li>
      <li>
        <a href="../apps/contacts/contacts.html">
          <i class="icon wb-user"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li>
        <a href="../apps/media/overview.html">
          <i class="icon wb-camera"></i>
          <span>Media</span>
        </a>
      </li>
      <li>
        <a href="../apps/documents/categories.html">
          <i class="icon wb-order"></i>
          <span>Documents</span>
        </a>
      </li>
      <li>
        <a href="../apps/projects/projects.html">
          <i class="icon wb-image"></i>
          <span>Project</span>
        </a>
      </li>
      <li>
        <a href="../apps/forum/forum.html">
          <i class="icon wb-chat-group"></i>
          <span>Forum</span>
        </a>
      </li>
      <li>
        <a href="../index.html">
          <i class="icon wb-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>
  </div>


  <!-- Page -->
  <div class="page">
    <div class="page-header padding-0">
      <div class="widget widget-article type-flex">
        <div class="widget-header cover overlay">
         @yield('content')
   </div>
          </div>
        </div>
      </div>

  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 Remark</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>




</body>


  <!-- Core  -->
  <script src="{{ url('assets/vendor/jquery/jquery.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/bootstrap.js') }}"></script>
  <script src="{{ url('assets/vendor/animsition/jquery.animsition.js') }}"></script>
  <script src="{{ url('assets/vendor/asscroll/jquery-asScroll.js') }}"></script>
  <script src="{{ url('assets/vendor/mous') }}ewheel/jquery.mousewheel.js"></script>
  <script src="{{ url('assets/vendor/asscrollable/jquery.asScrollable.all.js') }}"></script>
  <script src="{{ url('assets/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ url('assets/vendor/switchery/switchery.min.js') }}"></script>
  <script src="{{ url('assets/vendor/intro-js/intro.js') }}"></script>
  <script src="{{ url('assets/vendor/screenfull/screenfull.js') }}"></script>
  <script src="{{ url('assets/vendor/slidepanel/jquery-slidePanel.js') }}"></script>

  <script src="{{ url('assets/vendor/chartist-js/chartist.min.js') }}"></script>
  <script src="{{ url('assets/vendor/aspieprogress/jquery-asPieProgress.min.js') }}assets/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
  <script src="{{ url('assets/vendor/gmaps/gmaps.js') }}"></script>
  <script src="{{ url('assets/vendor/matchheight/jquery.matchHeight-min.js') }}"></script>

  <!-- Scripts -->
  <script src="{{ url('assets/js/core.js') }}"></script>
  <script src="{{ url('assets/js/site.js') }}"></script>

  <script src="{{ url('assets/js/sections/menu.js') }}"></script>
  <script src="{{ url('assets/js/sections/menubar.js') }}"></script>
  <script src="{{ url('assets/js/sections/sidebar.js') }}"></script>

  <script src="{{ url('assets/js/configs/config-colors.js') }}"></script>
  <script src="{{ url('assets/js/configs/config-tour.js') }}"></script>

  <script src="{{ url('assets/js/components/asscrollable.js') }}"></script>
  <script src="{{ url('assets/js/components/animsition.js') }}"></script>
  <script src="{{ url('assets/js/components/slidepanel.js') }}"></script>
  <script src="{{ url('assets/js/components/switchery.js') }}"></script>
  <script src="{{ url('assets/js/components/gmaps.js') }}"></script>
  <script src="{{ url('assets/js/components/matchheight.js') }}"></script>
  <!-- Core  -->
  <script src="{{ url('assets/vendor/jquery/jquery.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/bootstrap.js') }}"></script>
  <script src="{{ url('assets/vendor/animsition/jquery.animsition.js') }}"></script>
  <script src="{{ url('assets/vendor/asscroll/jquery-asScroll.js') }}"></script>
  <script src="{{ url('assets/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ url('assets/vendor/asscrollable/jquery.asScrollable.all.js') }}"></script>
  <script src="{{ url('assets/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ url('') }}assets/vendor/switchery/switchery.min.js"></script>
  <script src="{{ url('') }}assets/vendor/intro-js/intro.js"></script>
  <script src="{{ url('') }}assets/vendor/screenfull/screenfull.js"></script>
  <script src="{{ url('') }}assets/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="{{ url('assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

  <script src="{{ url('') }}assets/vendor/
/bootstrap-table.min.js"></script>
  <script src="{{ url('') }}assets/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>

  <!-- Scripts -->
  <script src="{{ url('') }}assets/js/core.js"></script>
  <script src="{{ url('') }}assets/js/site.js"></script>

  <script src="{{ url('') }}assets/js/sections/menu.js"></script>
  <script src="{{ url('') }}assets/js/sections/menubar.js"></script>
  <script src="{{ url('') }}assets/js/sections/sidebar.js"></script>

  <script src="{{ url('') }}assets/js/configs/config-colors.js"></script>
  <script src="{{ url('') }}assets/js/configs/config-tour.js"></script>

  <script src="{{ url('') }}assets/js/components/asscrollable.js"></script>
  <script src="{{ url('') }}assets/js/components/animsition.js"></script>
  <script src="{{ url('') }}assets/js/components/slidepanel.js"></script>
  <script src="{{ url('') }}assets/js/components/switchery.js"></script>






</body>

</html>
