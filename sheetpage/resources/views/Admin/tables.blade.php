@extends('layouts.Dashbord')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Bootstrap Admin Theme</title>
	@section('css')
<link href="{{config('app.url') .asset('sbadmin/css/tables/dataTables.bootstrap.css') }}" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
@endsection
@section('js')

<script src="{{config('app.url') .asset('sbadmin/js/tables/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
  $('#dataTables-example').DataTable({
  responsive: true
  });
  });
  
</script>
@endsection

   /* <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('css/bootstrap/metisMenu.min.css')}}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{asset('css/bootstrap/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('css/bootstrap/dataTables.responsive.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/bootstrap/sb-admin-2.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('css/bootstrap/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> */
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{asset('C:/xampp/htdocs/sheetpage/public/html/index.html')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('css/html/flot.html')}}">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="{{asset('css/html/morris.html')}}">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="{{asset('css/html/forms.html')}}"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('css/html/panels-wells.html')}}">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="{{asset('css/html/buttons.html')}}">Buttons</a>
                                </li>
                                <li>
                                    <a href="{{asset('css/html/notifications.html')}}">Notifications</a>
                                </li>
                                <li>
                                    <a href="{{asset('css/html/typography.html')}}">Typography</a>
                                </li>
                                <li>
                                    <a href="{{asset('css/html/icons.html')}}"> Icons</a>
                                </li>
                                <li>
                                    <a href="{{asset('css/html/grid.html')}}">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                     <div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length">
<label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
<option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option>
</select> entries</label></div></div>

<div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter">
<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div>
</div>

<div class="row"><div class="col-sm-12"><table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" name="users"
id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" 
aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 171px;">Date</th><th class="sorting" tabindex="0" 
aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Project: activate to sort column ascending" style="width: 207px;">Project
</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="TicketNumber: activate to sort 
column ascending" style="width: 188px;">TicketNumber</th>
<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="TicketSubject: activate to sort column 
ascending" style="width: 148px;">TicketSubject</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" 
colspan="1" aria-label="Timein: activate to sort column ascending" style="width: 108px;">Timein</th>
<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" 
colspan="1" aria-label="Timeout: activate to sort column ascending" style="width: 108px;">Timeout</th>
</tr>
                                </thead>          
                                <tbody>
                                     <tr >
                                        <td>2016-11-23</td>
                                        <td>First</td>
                                        <td>654321</td>
                                        <td >My first project</td>
                                        <td >09:00:00</td>
                                        <td >09:10:00</td>
                                    </tr>
                                <tr >
                                        <td>2016-11-25</td>
                                        <td>Second</td>
                                        <td>154326</td>
                                        <td >My Second project</td>
                                        <td >09:30:00</td>
                                        <td >09:40:00</td>
                                    </tr>
                               <tr >
                                        <td>2016-11-27</td>
                                        <td>PHP</td>
                                        <td>456789</td>
                                        <td >Registration</td>
                                        <td >10:00:00</td>
                                        <td >10:20:00</td>
                                    </tr>
                               <tr >
                                        <td>2016-11-27</td>
                                        <td>Laravel</td>
                                        <td>456729</td>
                                        <td >Login</td>
                                        <td >11:20:00</td>
                                        <td >11:30:00</td>
                                    </tr>
                                <tr >
                                        <td>2016-11-30</td>
                                        <td>Third</td>
                                        <td>789111</td>
                                        <td >Loginlaravel</td>
                                        <td >11:50:00</td>
                                        <td >12:00:00</td>
                                    </tr>
                             
                              <tr >
                                        <td>2016-11-30</td>
                                        <td>Timesheet</td>
                                        <td>567839</td>
                                        <td >Records in table</td>
                                        <td >12:20:00</td>
                                        <td >12:35:00</td>
                                    </tr>
                                     <tr >
                                        <td>2016-12-01</td>
                                        <td>File</td>
                                        <td>567839</td>
                                        <td >FileUploading</td>
                                        <td >12:50:00</td>
                                        <td >01:10:00</td>
                                    </tr>
                                <tr >
                                        <td>2016-12-04</td>
                                        <td>Database</td>
                                        <td>843912</td>
                                        <td >Github</td>
                                        <td >01:23:00</td>
                                        <td >01 :34:00</td>
                                    </tr>
                                 <tr >
                                        <td>2016-12-04</td>
                                        <td>Database Retrieval</td>
                                        <td>765893</td>
                                        <td >Retrieved the data</td>
                                        <td >02:30:00</td>
                                        <td >02 :34:00</td>
                                    </tr>
                                  <tr >
                                        <td>2016-12-09</td>
                                        <td>Query</td>
                                        <td>391750</td>
                                        <td >Query Builder</td>
                                        <td >03:12:00</td>
                                        <td >03 :23:00</td>
                                    </tr>
                               <tr >
                                        <td>2016-11-03</td>
                                        <td>Sheetpage</td>
                                        <td>5678098</td>
                                        <td >Displaying Records</td>
                                        <td >04:10:00</td>
                                        <td >04 :30:00</td>
                                    </tr>
                            
                             <tr >
                                        <td>2016-12-31</td>
                                        <td>Sheet</td>
                                        <td>4572398</td>
                                        <td >Display time</td>
                                        <td >05:06:00</td>
                                        <td >06 :05:00</td>
                                    </tr>
                           <tr >
                                        <td>2016-12-04</td>
                                        <td>Test1</td>
                                        <td>1234789</td>
                                        <td >Testing purpose</td>
                                        <td >08:06:00</td>
                                        <td >09 :05:00</td>
                                    </tr>
                             <tr >
                                        <td>2016-12-07</td>
                                        <td>Pagination</td>
                                        <td>789056</td>
                                        <td >Displaying records in pages</td>
                                        <td >10:10:00</td>
                                        <td >11 :03:00</td>
                                    </tr>
                             <tr >
                                        <td>2016-12-08</td>
                                        <td>Views</td>
                                        <td>987643</td>
                                        <td >Sharing data with views</td>
                                        <td >02:02:00</td>
                                        <td >02 :58:00</td>
                                    </tr>
                           <tr >
                                        <td>2016-12-08</td>
                                        <td>Table</td>
                                        <td>875642</td>
                                        <td >Table with bootstrap</td>
                                        <td >06:44:00</td>
                                        <td >07 :27:00</td>
                                    </tr>
              <tr >
                                        <td>2016-12-08</td>
                                        <td>Import</td>
                                        <td>967431</td>
                                        <td >Import file</td>
                                        <td >04:11:00</td>
                                        <td >05 :10:00</td>
                                    </tr>
</tbody>
</table>

</div>
</div>
                        
                                    
                      <div class="row"><div class="col-sm-6">
<div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 5 of 17 entries</div></div>
<div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
<ul class="pagination">
<li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
<a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
<a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
<a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
<a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
<a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
<a href="#">Next</a></li></ul></div></div></div>   
           </div>


                        
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           

    <!-- jQuery -->
    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>


    <!-- Bootstrap Core JavaScript -->
   <script src="{{asset('js/jquery/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('js/jquery/metisMenu.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{asset('js/jquery/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/jquery/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('js/jquery/dataTables.responsive.js"></script>
        <!-- Custom Theme JavaScript -->
    <script src="js/jquery/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>
<script type="text/javascript">
$('.users').DataTable({
    select:true,
});
</script>

</html>
