
@extends('layouts.demo')
@section('title', 'Tables')
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
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">DataTables Advanced Tables</div>
      <div class="panel-body">
        <table id="dataTables-example" width="100%" class="table table-striped table-bordered table-hover">
          <thead>
          <tr>
        <th>Date</th>
        <th>Project</th>
        <th>TicketNumber</th>
        <th>Ticketsubject</th>
        <th>Timein</th>
        <th>Timeout</th>
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
                               
                                  <tr>
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

                                 <tr>
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
                            
                             <tr>
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
                             
                          <tr>
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

                            <tr>
                                        <td>2016-12-08</td>
                                        <td>Table</td>
                                        <td>875642</td>
                                        <td >Table with bootstrap</td>
                                        <td >06:44:00</td>
                                        <td >07 :27:00</td>
                         </tr>

                         <tr>
                                        <td>2016-12-08</td>
                                        <td>Import</td>
                                        <td>967431</td>
                                        <td >Import file</td>
                                        <td >04:11:00</td>
                                        <td >05 :10:00</td>
                         </tr>
            
          </tbody>
        </table>

        <div class="well">
          <h4>DataTables Usage Information</h4>
          <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p><a target="_blank" href="https://datatables.net/" class="btn btn-default btn-lg btn-block">View DataTables Documentation</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Kitchen Sink</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Basic Table</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Striped Rows</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Bordered Table</div>
      <div class="panel-body">
        <div class="table-responsive table-bordered">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Hover Rows</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Context Classes</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr class="success">
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr class="info">
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr class="warning">
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr class="danger">
                <td>4</td>
                <td>John</td>
                <td>Smith</td>
                <td>@jsmith</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>@endsection