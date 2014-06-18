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
	return View::make('hello');
});

/*Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users_view', $users);
});*/

Route::get('user', array('as' => 'user/main', 'uses' => 'UserController@mainAction'));

Route::get('user/login', array('as' => 'user/login', 'uses' => 'UserController@indexAction')); 
 
Route::post('user/login', array('as' => 'user/login', 'uses' => 'UserController@loginAction'));  
 
Route::get('user/profile', array('as' => 'user/profile', 'uses' => 'UserController@profileAction'));  

//Route for user registeration
Route::get('register', function()
{
	return View::make('user/register');
}); 

//Route for inserting user to DB
Route::post('user/create', array('as' => 'user/create', 'uses' => 'UserController@createAction'));    

//Route for user activation
Route::get('user/activate/{key}/{username}', array('as' => 'user/activate' , 'uses' => 'UserController@activateAction'));

Route::get('user/logout', array('as' => 'user/logout', 'uses' => 'UserController@logoutAction'));  

//Route for facebook login
Route::get('user/fb', array('as' => 'user/fb', 'uses' => 'UserController@fbLoginACtion'));  

//Share via twitter
Route::get('share/tw', array('as' => 'restaurant/tw', 'uses' => 'ShareController@twitterAction')); 

//Share via facebook
Route::get('share/fb', array('as' => 'restaurant/fb', 'uses' => 'ShareController@facebookAction')); 

//Restaurant index Page
Route::get('restaurants', function()
{
    $reviews = Review::all();

    return View::make('review/index')->with('allReviews', $reviews);
});

Route::get('restaurants/review/{review_id}', array('as' => 'review/detail', 'uses' => 'ReviewController@detailAction')); 
