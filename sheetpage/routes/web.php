<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user','UserController@index');

Route::get('importExport', 'DemoController@importExport');
Route::get('downloadExcel/{type}', 'DemoController@downloadExcel');
Route::post('importExcel', 'DemoController@importExcel');

/*Route::get('/Admin/Dashbord','UserController@indexDashbord');

Route::get('/Admin/tables','UserController@tablesDashbord');*/
Route::get('/', function () {
  return redirect('/demo');
});

Route::get('/login', function () { return redirect('/admin'); });
Route::get('/home', function () { return redirect('/admin'); });

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'HomeController@admin');
	Route::get('/logout', 'HomeController@logout');
	Route::get('/dashboard', 'UserController@index');
	Route::get('/users', 'UserController@users');
});

// Demo

Route::group(['prefix' => 'demo'], function () {
	
	Route::get('/', function () {
	   return view('demo.dashboard');
	});

	Route::get('/login', function () {
	   return view('demo.login');
	});

	Route::get('/charts/flot', function () {
	   return view('demo.flot');
	});

	Route::get('/charts/morris', function () {
	   return view('demo.morris');
	});

	Route::get('/tables', function () {
	   return view('demo.tables');
	});

	Route::get('/forms', function () {
	   return view('demo.forms');
	});

	Route::get('/panels', function () {
	   return view('demo.panels');
	});

	Route::get('/buttons', function () {
	   return view('demo.buttons');
	});

	Route::get('/notifications', function () {
	   return view('demo.notifications');
	});

	Route::get('/typography', function () {
	   return view('demo.typography');
	});

	Route::get('/icons', function () {
	   return view('demo.icons');
	});

	Route::get('/grid', function () {
	   return view('demo.grid');
	});

	Route::get('/blank', function () {
	   return view('demo.blank');
	});

	Route::get('/login', function () {
	   return view('demo.login');
	});

});
