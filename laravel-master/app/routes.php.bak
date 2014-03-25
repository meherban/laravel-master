<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('short');
});

Route::get('users', function()
{
	return 'users!';
});

Route::get('hello', function()
{
	return View::make('hello');
});

Route::get('workShort', function()
{
	return View::make('workShort');
});
Route::post('/workShort', 'AuthController@url');

Route::get('/{url}', function($url)
{  
	$users = DB::table('authors')->select()->where('shortened', $url)->get();
	if ( $users ) {
		$data = json_decode(json_encode((array) $users), true);
		return Redirect::to($data[0]['url']);
	}else{
			//echo Response::error('404');
			echo 'The requested URL was not found on this server.';
	}
});

        if (Request::ajax())
        { 
			return Response::json( array(
										'success'   => true, //success
										'msg'       => 'Account created!.'
										) ,200);
           
        }//if ajax request
    