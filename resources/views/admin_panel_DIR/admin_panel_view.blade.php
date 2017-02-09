<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Weird Press | </title>

    <!-- Bootstrap -->
    <link href="/Admin_panel_/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/Admin_panel_/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/Admin_panel_/css/custom.css" rel="stylesheet">

    <link rel="shortcut icon" href="/Admin_panel_/img/favicon.png" >

  </head>

  <body class="nav-md">
    <div class="container body" style="width: 100%; max-width:100%">
      <div class="main_container">

        <div class="top_nav">
          <div class="nav_menu">
            <nav style="background-color: #EDEDED;">


              <ul class="nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/Admin_panel_/img/img.jpg" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li>
                      <a href="{{ url('/DropPage') }}">
                        Drop template <i class="fa fa-trash-o fa-lg" style="font-size: 22px; "></i>
                      </a>
                    </li>

                    <li>
                      <a href="{{ url('/logout') }}"
                         onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out pull-right"></i> Log Out
                      </a>
                    </li>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div class="row" id="main_main">

          <div class="col-md-3 left_col" id="leftCol">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="#" class="site_title"> <span>Weird Press</span></a>
              </div>

              <div class="clearfix"></div>
              <!-- menu profile quick info -->
              <div class="profile">
                <div class="profile_pic">
                  <img src="/Admin_panel_/img/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Welcome,</span>
                  <h2>{{ Auth::user()->name }}</h2>
                </div>
              </div>
              <!-- /menu profile quick info -->

              <br />

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>Page Admin</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="admin_panel"> Preview </a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Edit template <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="edit_template">Edit Personal Info.</a></li>
                        <li><a href="edit_template">Edit My story </a></li>
                        <li><a href="edit_Images">Edit Images </a></li>
                      </ul>
                    </li>
                      <ul class="nav child_menu">
                        <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                        <li><a href="fixed_footer.html">Fixed Footer</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>

              </div>
              <!-- /sidebar menu -->

            </div>
          </div>

          <!-- top navigation -->


          <!-- page content -->
          <div class="col-md-9 right_col" role="main" style="max-width: 1030px; margin-left: 22%;">
                @yield('content')
          </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        {{--<footer>--}}
          {{--<div class="pull-right">--}}
            {{--Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>--}}
          {{--</div>--}}
          {{--<div class="clearfix"></div>--}}
        {{--</footer>--}}
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/Admin_panel_/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/Admin_panel_/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/Admin_panel_/js/custom.min.js"></script>

  </body>
</html>
