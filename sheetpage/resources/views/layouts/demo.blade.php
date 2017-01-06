<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- MetisMenu CSS-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.min.css" rel="stylesheet">
    <!-- Plugins CSS-->@yield('css')
    <!-- Custom CSS-->
    <link href="{{ config('app.url') . asset('sbadmin/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Custom Fonts-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <div id="wrapper">
      <nav role="navigation" style="margin-bottom: 0" class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand">SB Admin v2.0</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-messages">
              <li><a href="{{ url ('/demo') }}">
                  <div><strong>Gabriel Burgos</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div><strong>Gabriel Burgos</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div><strong>Gabriel Burgos</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div></a></li>
              <li class="divider"></li>
              <li><a href="#" class="text-center"><strong>Read All Messages</strong><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>
          <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-tasks">
              <li><a href="{{ url ('/demo') }}">
                  <div>
                    <p><strong>Task 1</strong><span class="pull-right text-muted">40% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%" class="progress-bar progress-bar-success"><span class="sr-only">40% Complete (success)</span></div>
                    </div>
                  </div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div>
                    <p><strong>Task 2</strong><span class="pull-right text-muted">20% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%" class="progress-bar progress-bar-info"><span class="sr-only">20% Complete</span></div>
                    </div>
                  </div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div>
                    <p><strong>Task 3</strong><span class="pull-right text-muted">60% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%" class="progress-bar progress-bar-warning"><span class="sr-only">60% Complete (warning)</span></div>
                    </div>
                  </div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div>
                    <p><strong>Task 4</strong><span class="pull-right text-muted">80% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%" class="progress-bar progress-bar-danger"><span class="sr-only">80% Complete (danger)</span></div>
                    </div>
                  </div></a></li>
              <li class="divider"></li>
              <li><a href="#" class="text-center"><strong>See All Tasks</strong><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>
          <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-alerts">
              <li><a href="{{ url ('/demo') }}">
                  <div><i class="fa fa-comment fa-fw"></i> New Comment<span class="pull-right text-muted small">4 minutes ago</span></div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div><i class="fa fa-twitter fa-fw"></i> 3 New Followers<span class="pull-right text-muted small">12 minutes ago</span></div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div><i class="fa fa-envelope fa-fw"></i> Message Sent<span class="pull-right text-muted small">4 minutes ago</span></div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div><i class="fa fa-tasks fa-fw"></i> New Task<span class="pull-right text-muted small">4 minutes ago</span></div></a></li>
              <li class="divider"></li>
              <li><a href="{{ url ('/demo') }}">
                  <div><i class="fa fa-upload fa-fw"></i> Server Rebooted<span class="pull-right text-muted small">4 minutes ago</span></div></a></li>
              <li class="divider"></li>
              <li><a href="#" class="text-center"><strong>See All Alerts</strong><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>
          <li class="dropdown">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="{{ url ('/demo') }}"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
              <li><a href="{{ url ('/demo') }}"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation" >
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu" >
              <li class="sidebar-search">
                <div class="input-group custom-search-form">
                  <input type="text"  class="form-control" placeholder="Search..." >
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button" >
                    <i class="fa fa-search"></i>
                    </button>
                    </span>
                </div>
              </li>
              <li><a href="{{ url ('/demo') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
              <li><a href="#" class="{{ (Request::is('*charts') ? 'active' : '') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="{{ url ('/demo/charts/flot') }}">Flot Charts</a></li>
                  <li><a href="{{ url ('/demo/charts/morris') }}">Morris.js Charts</a></li>
                </ul>
              </li>
              <li><a href="{{ url ('/demo/tables') }}"><i class="fa fa-table fa-fw"></i> Tables</a></li>
              <li><a href="{{ url ('/demo/forms') }}"><i class="fa fa-edit fa-fw"></i> Forms</a></li>
              <li><a href="{{ url ('') }}"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="{{ url ('/demo/panels') }}">Panels and Wells</a></li>
                  <li><a href="{{ url ('/demo/buttons') }}">Buttons</a></li>
                  <li><a href="{{ url ('/demo/notifications') }}">Notifications</a></li>
                  <li><a href="{{ url ('/demo/typography') }}">Typography</a></li>
                  <li><a href="{{ url ('/demo/icons') }}"> Icons</a></li>
                  <li><a href="{{ url ('/demo/grid') }}">Grid</a></li>
                </ul>
              </li>
              <li><a href="{{ url ('') }}"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="#">Second Level Item</a></li>
                  <li><a href="#">Second Level Item</a></li>
                  <li><a href="#">Third Level <span class="fa arrow"></span></a>
                    <ul class="nav nav-third-level">
                      <li><a href="#">Third Level Item</a></li>
                      <li><a href="#">Third Level Item</a></li>
                      <li><a href="#">Third Level Item</a></li>
                      <li><a href="#">Third Level Item</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="{{ url ('') }}"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="{{ url ('/demo/blank') }}">Blank Page</a></li>
                  <li><a href="{{ url ('/demo/login') }}">Login Page</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">@yield('title')</h1>
          </div>
          <!-- /.col-lg-12-->
        </div>
        <!-- /.row-->@yield('content')
      </div>
    </div>
    <!-- jQuery-->
    <script src="//code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Metis Menu Plugin JavaScript-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.min.js"></script>
    <!-- Raphael-->
    <script src="{{ config('app.url').asset('sbadmin/js/raphael.js') }}"></script>
    <!-- Plugins JS-->@yield('js')
    <!-- Morris-->
    <!--script(src="{{ config('app.url') . '/sbadmin/js/morris/morris.js' }}")-->
    <!--script(src="{{ config('app.url') . '/sbadmin/js/morris/morris-data.js' }}")-->
    <!-- Custom Theme JavaScript-->
    <script src="{{ config('app.url').asset('sbadmin/js/sb-admin-2.js') }}"></script>
  </body>
</html>