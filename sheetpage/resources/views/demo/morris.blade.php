
@extends('layouts.demo')
@section('title', 'Morris Chart')
@section('css')
<link href="{{ config('app.url') . '/sbadmin/css/morris/morris.css' }}" rel="stylesheet"/>@endsection
@section('js')
<script src="{{ config('app.url') . '/sbadmin/js/morris/morris.js' }}"></script>
<script src="{{ config('app.url') . '/sbadmin/js/morris/morris-data.js' }}"></script>@endsection
@section('content')
<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Area Chart Example</div>
      <div class="panel-body">
        <div id="morris-area-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Bar Chart Example</div>
      <div class="panel-body">
        <div id="morris-bar-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Line Chart Example</div>
      <div class="panel-body">
        <div id="morris-line-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">Donut Chart Example</div>
      <div class="panel-body">
        <div id="morris-donut-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Morris.js Usage</div>
      <div class="panel-body">
        <p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p><a target="_blank" href="http://morrisjs.github.io/morris.js/" class="btn btn-default btn-lg btn-block">View Morris.js Documentation</a>
      </div>
    </div>
  </div>
</div>@endsection