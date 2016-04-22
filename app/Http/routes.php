<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PagesController@getHome');

    Route::get('/home', 'PagesController@getHome' );
    Route::get('/contact', 'PagesController@getContact');
    Route::get('/about', 'PagesController@getAbout');
    Route::get('/schedule', 'PagesController@getSchedule');
    Route::get('/private-lessons', 'PagesController@getPrivateLessons');
    Route::get('/events', 'PagesController@getEvents');
    Route::get('/musikgarten', 'PagesController@getMusikGarten');
});

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::get('/admin', 'PagesController@getAdmin');
    Route::get('/admin/events', 'PagesController@getAdminEvents');
    Route::post('/admin/events/create', 'PagesController@postAdminEventsCreate');
    Route::post('/admin/events/delete', 'PagesController@postAdminEventsDelete');
    Route::post('/admin/content', 'PagesController@postAdminContent');

    Route::get('/admin/content/home', 'PagesController@getAdminContentHome');
    Route::get('/admin/content/musikgarten', 'PagesController@getAdminContentMusikgarten');
    Route::get('/admin/content/private-lessons', 'PagesController@getAdminContentPrivateLessons');
    Route::get('/admin/content/events', 'PagesController@getAdminContentEvents');
    Route::get('/admin/content/about', 'PagesController@getAdminContentAbout');
    Route::get('/admin/content/contact', 'PagesController@getAdminContentContact');
    Route::get('/admin/content/side-bar', 'PagesController@getAdminContentSideBar');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    //Route::get('/home', 'HomeController@index');
});
