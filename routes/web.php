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
    if(\Illuminate\Support\Facades\Auth::check()){
        return redirect('/home');
    }
    return view('welcome');
});

Route::get('/timeline','MessagesController@indexTimeline');

Route::get('/history/index','MessagesController@index');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::resource('message','MessagesController');

Route::resource('reply','RepliesController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', 'Auth\LoginController@logout');
