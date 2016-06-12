<?php

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
| For simple static pages
|
*/
Route::auth();

Route::get('/', 'PageController@home');


/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
|
| For the main application routes
|
*/

Route::group(['middleware' => 'auth', 'namespace' => 'Main'], function () {
    Route::get('/main', 'MainController@index');
});


/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
|
| For the Profile of a user
|
*/

Route::group(['middleware' => 'auth', 'namespace' => 'Profile', 'prefix' => 'profile'], function () {
    Route::get('/', 'ProfileController@index');
});



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| For the Admin routes
|
*/

Route::group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
});


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| For the API routes
|
*/

Route::group(['middleware' => 'auth:api', 'namespace' => 'Api', 'prefix' => 'api/v1'], function () {
    Route::get('/', 'ApiController@index');
});