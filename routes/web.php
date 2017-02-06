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

Route::get('lonely_edit' , function(){
    return view('edit_lonely.lonely_edit');
});


Route::get('X_edit' , function(){
    return view('edit_materializeX.material_edit');
});

Route::get('temp', 'materializeXController@temp');

Route::post('X_edit', 'materializeXController@temp_post');
//Route::get('temp', 'lonelyController@lonely_load_from_DB');

//Route::get('materializeX', 'materializeXController@materializeX_load_from_DB');

Route::get('materializeX_view', 'materializeXController@materializeX_load_from_DB');

Route::get('materializeX_check' , function(){
    return view('materializeXcheck');
});

Route::get('lonely_view' , 'lonelyController@lonely_load_from_DB');

//Route::get('materializeX' , function(){
//    return view('materializeX.materializeX');
//});

Route::get('register_custom' , function(){
    return view('Register.register_custom');
});

//Route::post('login_request', 'userLoginController@doLogin');

//Route::post('login_request', 'userLoginController@registerMe');

Auth::routes();

Route::get('/home', 'HomeController@index');
