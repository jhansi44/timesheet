
@extends('layouts.demo')
@section('title', 'Flot Chart')
@section('js')
<!-- Flot-->
<script src="{{ config('app.url') . '/sbadmin/js/flot/excanvas.js' }}"></script>
<script src="{{ config('app.url') . '/sbadmin/js/flot/jquery.flot.js' }}"></script>
<script src="{{ config('app.url') . '/sbadmin/js/flot/jquery.flot.pie.js' }}"></script>
<script src="{{ config('app.url') . '/sbadmin/js/flot/jquery.flot.resize.js' }}"></script>
<script src="{{ config('app.url') . '/sbadmin/js/flot/jquery.flot.time.js' }}"></script>
<script src="{{ config('app.url') . '/sbadmin/js/flot/flot-data.js' }}"></script>@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Line Chart Example</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div class="flot-chart">
          <div id="flot-line-chart" class="flot-chart-content"></div>
        </div>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
  </div>
  <!-- /.col-lg-12-->
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Pie Chart Example</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div class="flot-chart">
          <div id="flot-pie-chart" class="flot-chart-content"></div>
        </div>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
  </div>
  <!-- /.col-lg-6-->
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Multiple Axes Line Chart Example</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div class="flot-chart">
          <div id="flot-line-chart-multi" class="flot-chart-content"></div>
        </div>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
  </div>
  <!-- /.col-lg-6-->
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Moving Line Chart Example</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div class="flot-chart">
          <div id="flot-line-chart-moving" class="flot-chart-content"></div>
        </div>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
  </div>
  <!-- /.col-lg-6-->
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Bar Chart Example</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <div class="flot-chart">
          <div id="flot-bar-chart" class="flot-chart-content"></div>
        </div>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
  </div>
  <!-- /.col-lg-6-->
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Flot Charts Usage</div>
      <!-- /.panel-heading-->
      <div class="panel-body">
        <p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks, and interactive features. In SB Admin, we are using the most recent version of Flot along with a few plugins to enhance the user experience. The Flot plugins being used are the tooltip plugin for hoverable tooltips, and the resize plugin for fully responsive charts. The documentation for Flot Charts is available on their website, <a target="_blank" href="http://www.flotcharts.org/">http://www.flotcharts.org/</a>.</p><a target="_blank" href="http://www.flotcharts.org/" class="btn btn-default btn-lg btn-block">View Flot Charts Documentation</a>
      </div>
      <!-- /.panel-body-->
    </div>
    <!-- /.panel-->
  </div>
  <!-- /.col-lg-6-->
</div>
<!-- /.row-->@endsection