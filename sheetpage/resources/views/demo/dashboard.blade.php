
@extends('layouts.demo')
@section('title', 'Dashboard')
@section('css')
<link href="{{ config('app.url') . '/sbadmin/css/morris/morris.css' }}" rel="stylesheet"/>@endsection
@section('js')
<script src="{{ config('app.url') . '/sbadmin/js/morris/morris.js' }}"></script>
<script src="{{ config('app.url') . '/sbadmin/js/morris/morris-data.js' }}"></script>@endsection
@section('content')
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3"><i class="fa fa-comments fa-5x"></i></div>
          <div class="col-xs-9 text-right">
            <div class="huge">26</div>
            <div>New Comments!</div>
          </div>
        </div>
      </div><a href="#">
        <div class="panel-footer"><span class="pull-left">View Details</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div></a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3"><i class="fa fa-tasks fa-5x"></i></div>
          <div class="col-xs-9 text-right">
            <div class="huge">12</div>
            <div>New Tasks!</div>
          </div>
        </div>
      </div><a href="#">
        <div class="panel-footer"><span class="pull-left">View Details</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div></a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3"><i class="fa fa-shopping-cart fa-5x"></i></div>
          <div class="col-xs-9 text-right">
            <div class="huge">124</div>
            <div>New Orders!</div>
          </div>
        </div>
      </div><a href="#">
        <div class="panel-footer"><span class="pull-left">View Details</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div></a>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3"><i class="fa fa-support fa-5x"></i></div>
          <div class="col-xs-9 text-right">
            <div class="huge">13</div>
            <div>Support Tickets!</div>
          </div>
        </div>
      </div><a href="#">
        <div class="panel-footer"><span class="pull-left">View Details</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div></a>
    </div>
  </div>
</div>
<!-- /.row-->
<div class="row">
  <div class="col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
        <div class="pull-right">
          <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">Actions<span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu pull-right">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div id="morris-area-chart"></div>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
        <div class="pull-right">
          <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">Actions<span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu pull-right">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
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
            </div>
            <!-- /.table-responsive-->
          </div>
          <!-- /.col-lg-4 (nested)-->
          <div class="col-lg-8">
            <div id="morris-bar-chart"></div>
          </div>
          <!-- /.col-lg-8 (nested)-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-clock-o fa-fw"></i> Responsive Timeline</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <ul class="timeline">
          <li>
            <div class="timeline-badge"><i class="fa fa-check"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem ipsum dolor</h4>
                <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small></p>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge warning"><i class="fa fa-credit-card"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem ipsum dolor</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge danger"><i class="fa fa-bomb"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem ipsum dolor</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem ipsum dolor</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge info"><i class="fa fa-save"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem ipsum dolor</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                <hr/>
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle"><i class="fa fa-gear"></i><span class="caret"></span></button>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem ipsum dolor</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem ipsum dolor</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
  </div>
  <!-- /.col-lg-8-->
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Notifications Panel</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div class="list-group"><a href="#" class="list-group-item"><i class="fa fa-comment fa-fw"></i> New Comment<span class="pull-right text-muted small"><em>4 minutes ago</em></span></a><a href="#" class="list-group-item"><i class="fa fa-twitter fa-fw"></i> 3 New Followers<span class="pull-right text-muted small"><em>12 minutes ago</em></span></a><a href="#" class="list-group-item"><i class="fa fa-envelope fa-fw"></i> Message Sent<span class="pull-right text-muted small"><em>27 minutes ago</em></span></a><a href="#" class="list-group-item"><i class="fa fa-tasks fa-fw"></i> New Task<span class="pull-right text-muted small"><em>43 minutes ago</em></span></a><a href="#" class="list-group-item"><i class="fa fa-upload fa-fw"></i> Server Rebooted<span class="pull-right text-muted small"><em>11:32 AM</em></span></a><a href="#" class="list-group-item"><i class="fa fa-bolt fa-fw"></i> Server Crashed!<span class="pull-right text-muted small"><em>11:13 AM</em></span></a><a href="#" class="list-group-item"><i class="fa fa-warning fa-fw"></i> Server Not Responding<span class="pull-right text-muted small"><em>10:57 AM</em></span></a><a href="#" class="list-group-item"><i class="fa fa-shopping-cart fa-fw"></i> New Order Placed<span class="pull-right text-muted small"><em>9:49 AM</em></span></a><a href="#" class="list-group-item"><i class="fa fa-money fa-fw"></i> Payment Received<span class="pull-right text-muted small"><em>Yesterday</em></span></a></div>
        <!-- /.list-group--><a href="#" class="btn btn-default btn-block">View All Alerts</a>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example</div>
      <div class="panel-body">
        <div id="morris-donut-chart"></div><a href="#" class="btn btn-default btn-block">View Details</a>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
    <div class="chat-panel panel panel-default">
      <div class="panel-heading"><i class="fa fa-comments fa-fw"></i> Chat
        <div class="btn-group pull-right">
          <button type="button" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><i class="fa fa-chevron-down"></i></button>
          <ul class="dropdown-menu slidedown">
            <li><a href="#"><i class="fa fa-refresh fa-fw"></i> Refresh</a></li>
            <li><a href="#"><i class="fa fa-check-circle fa-fw"></i> Available</a></li>
            <li><a href="#"><i class="fa fa-times fa-fw"></i> Busy</a></li>
            <li><a href="#"><i class="fa fa-clock-o fa-fw"></i> Away</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a></li>
          </ul>
        </div>
      </div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <ul class="chat">
          <li class="left clearfix"><span class="chat-img pull-left"><img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle"/></span>
            <div class="chat-body clearfix">
              <div class="header"><strong class="primary-font">Jack Sparrow</strong><small class="pull-right text-muted"><i class="fa fa-clock-o fa-fw"></i> 12 mins ago</small></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</p>
            </div>
          </li>
          <li class="right clearfix"><span class="chat-img pull-right"><img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle"/></span>
            <div class="chat-body clearfix">
              <div class="header"><small class="text-muted"><i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small><strong class="pull-right primary-font">Bhaumik Patel</strong></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</p>
            </div>
          </li>
          <li class="left clearfix"><span class="chat-img pull-left"><img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle"/></span>
            <div class="chat-body clearfix">
              <div class="header"><strong class="primary-font">Jack Sparrow</strong><small class="pull-right text-muted"><i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</p>
            </div>
          </li>
          <li class="right clearfix"><span class="chat-img pull-right"><img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle"/></span>
            <div class="chat-body clearfix">
              <div class="header"><small class="text-muted"><i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small><strong class="pull-right primary-font">Bhaumik Patel</strong></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</p>
            </div>
          </li>
        </ul>
      </div>
      <!-- /.panel-body-->
      <div class="panel-footer">
        <div class="input-group">
          <input id="btn-input" type="text" placeholder="Type your message here..." class="form-control input-sm"/><span class="input-group-btn">
            <button id="btn-chat" class="btn btn-warning btn-sm">Send</button></span>
        </div>
      </div>
      <!-- /.panel-footer-->
    </div>
    <!-- /.panel .chat-panel-->
  </div>
  <!-- /.col-lg-4-->
</div>
<!-- /.row-->@endsection