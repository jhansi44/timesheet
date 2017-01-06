<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.min.css" rel="stylesheet">@yield('css')
    <link href="{{ config('app.url') . '/sbadmin/css/sb-admin-2.css' }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <div id="wrapper">
      <nav role="navigation" style="margin-bottom: 0" class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="{{ url ('/admin/dashboard') }}" class="navbar-brand">SB Admin v2.0</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="{{ Auth::logout() }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
        <div role="navigation" class="navbar-default sidebar">
          <div class="sidebar-nav navbar-collapse">
            <ul id="side-menu" class="nav">
              <li class="sidebar-search">
                <div class="input-group custom-search-form">
                  <input type="text" placeholder="Search..." class="form-control"><span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button></span>
                </div>
              </li>
              <li><a href="{{ url ('/admin/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
              <li><a href="{{ url ('/admin/users') }}"><i class="fa fa-users fa-fw"></i> Usuarios</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">@yield('title')</h1>
          </div>
        </div>@yield('content')
      </div>
    </div>
    <script src="//code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.min.js"></script>
    <script src="{{ config('app.url') . '/sbadmin/js/raphael.js' }}"></script>@yield('js')
    <script src="{{ config('app.url') . '/sbadmin/js/sb-admin-2.js' }}"></script>
  </body>
</html>