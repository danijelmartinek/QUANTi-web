<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/news', 'BlogController@news');

Route::get('/post/{slug}', 'BlogController@show');

Route::get('/events', 'EventController@events');

Route::get('contact',
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    // All my routes that needs a logged in user
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile', 'UserController@update_avatar');

    Route::get('/membership/register', 'MembershipController@index');
    Route::post('/membership/register', 'MembershipController@register_member');

    Route::get('/membership', 'MembershipController@member');


});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
