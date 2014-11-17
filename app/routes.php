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


Route::get('/', array('as' => 'home', function()
{
   return View::make('home');
}));

//Route::get('color/{color}', array('as' => 'color', function($color)
//{
   //echo $color;
   //return "32";
//}));
Route::group(array('prefix' => 'admin'), function()
{

   Route::get('user', function()
   {
	  return 23;
	  echo "green";
   });

});

Route::get('color/{color}', array('uses' => 'HomeController@color',
                                        'as' => 'color'));

Route::get('new', array('uses' => 'HomeController@newUser',
                                        'as' => 'newUser'));


Route::get('users', function()
{
   $users = User::all();
   return View::make('users')->with('users', $users);
});


Route::get('assets', function()
{
   $assets = Asset::all();
   return View::make('assets')->with('assets', $assets);
});


Route::get('asset/{tag}', array('as' => 'viewAsset', function($tag)
{
   //$asset = Asset::find($tag);
   $asset = Asset::where('tag', $tag)->first();
   return View::make('asset')->with('asset', $asset);
}));

Route::get('statuses', array('as' => 'statuses', function()
{
   $statuses = Status::all();
   return View::make('statuses')->with('statuses', $statuses);
}));

Route::get('categories', array('as' => 'categories', function()
{
   $categories = Category::all();
   return View::make('categories')->with('categories', $categories);
}));

Route::get('locations', array('as' => 'locations', function()
{
   $locations = Location::all();
   return View::make('locations')->with('locations', $locations);
}));


Route::post('statuses', array('uses' => 'FormController@statuses',
                                        'as' => 'statuses'));

Route::post('assets', array('uses' => 'FormController@assets',
                                        'as' => 'assets'));

Route::post('locations', array('uses' => 'FormController@locations',
                                        'as' => 'locations'));

Route::delete('locations/{id}', array('uses' => 'HomeController@rmLocation',
'as' => 'rmLocation'));

Route::post('users', array('uses' => 'FormController@users',
                                        'as' => 'users'));

Route::post('categories', array('uses' => 'FormController@categories',
                                        'as' => 'categories'));

Route::post('search', array('uses' => 'HomeController@search',
                                        'as' => 'search'));

Route::get('asset/{tag}/edit', array('uses' => 'HomeController@edit',
'as' => 'edit'));


Route::post('asset', array('uses' => 'FormController@saveAsset',
										'as' => 'saveAsset'));

Route::post('asset/{id}', array('uses' => 'FormController@updateAsset',
'as' => 'updateAsset'));

Route::post('asset/{id}/note', array('uses' => 'FormController@saveNote',
'as' => 'saveNote'));

Route::get('json/{category_id}', array('uses' => 'JSONController@makeTag',
'as' => 'getTag'));
