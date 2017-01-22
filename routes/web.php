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
    return view('welcome');
});

Route::get('login_', function(){
    return view('Login/login_temp');
});

Route::get('admin_panel', function(){
    return view('admin_panel_DIR/admin_panel_view');
});

Route::get('check' , function(){
    return view('check');
});

//Route::post('login_request', 'userLoginController@doLogin');

Route::post('login_request', 'userLoginController@registerMe');


Auth::routes();

Route::get('/home', 'HomeController@index');
