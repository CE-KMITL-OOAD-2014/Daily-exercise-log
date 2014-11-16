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
	return View::make('index');
});

Route::get('/profile', function()
{
	return View::make('Profile');
});

Route::get('/register', function()
{
	return View::make('register');
});

Route::get('/comment', function()
{
	return View::make('comment');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/index', function()
{
	return View::make('index');
});

Route::get('/index2', function()
{
	return View::make('index2');
});

Route::get('/exercise', function()
{
	return View::make('exercise');
});

Route::get('/editprofile', function()
{
	return View::make('editprofile');
});

Route::get('/plan', function()
{
	return View::make('plan');
});

Route::get('/plan2', function()
{
	return View::make('plan2');
});

Route::get('/plan3', function()
{
	return View::make('plan3');
});

Route::get('/plan4', function()
{
	return View::make('plan4');
});

Route::get('/plan5', function()
{
	return View::make('plan5');
});

Route::get('/viewcomment', function()
{
	return View::make('viewcomment');
});

Route::post('/login', 'HomeController@login');

Route::post('/logout', 'HomeController@logout');

Route::post('/register', 'HomeController@register');

Route::post('/exercise', 'ExerciseController@exercise');

Route::post('/addplan', 'HomeController@plan');

Route::post('/plan', 'ExerciseController@plan');

Route::post('/profile', 'ExerciseController@profile');

Route::post('/comment', 'HomeController@comment');

Route::post('/viewcomment', 'ExerciseController@viewcomment');

?>