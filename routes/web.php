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
	    //return view('welcome');
	    return 'Hello World';
	});


	Route::get('user/{id}', function ($id) {
	    return 'User '.$id;
	});

	Route::get('hello','Hello@index');

	Route::get('hello/{name}', 'Hello@show');

	Route::get('names', function()
	{
	    $arr= array(
	      1 => "John",
	      2 => "Mary",
	      3 => "Steven"
	    );
	    return json_encode($arr);
	});
