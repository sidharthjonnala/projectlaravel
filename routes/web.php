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

Route::get('/contact', function() {
	return view('pages.contact');
});

Route::get('/login', function() {
	return view('pages.login');
});

Route::post('/loginsuccess', 'Controller@loginto');





Route::group(array('prefix' => 'pages'), function() {



	 // about page (resources/views/pages/about.blade.php)
	Route::get('/about', function()
	{
	    return View::make('pages.about');
	});



	// work page (resources/views/pages/work.blade.php)
	Route::get('work', array('as' => 'work', function()
	{
	    return View::make('pages.work');
	}));

});
    

Route::get('ID/{id}',function($id){
   return 'ID: '.$id;
});

Route::get('/user/{name?}',function($name = 'default'){
   return "Name: ".$name;
});