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

// ####### Preview block
Route::get('materialX_preivew' , 'materializeXController@show_preview' );

Route::get('lonely_preivew' , 'lonelyController@show_preview' );
// ####### end of preview block

// ###### URL Access My page / my email
Route::get('MyPage/{email}' , 'HomeController@accessMyPage' );
// ###### endo of access mypage / myemail

// ##### after login or registration
Route::get('admin_panel', 'HomeController@showAdminPanel');

// ##### when a materialize template is chosen
Route::get('material_chosed' , 'materializeXController@templateChosed' );

// ##### when a lonely template is chosen
Route::get('lonely_chosed' , 'lonelyController@templateChosed' );

// ### Drop page
Route::get('DropPage' , 'HomeController@dropPage' );

// ### Edit template
Route::get('edit_template' , 'HomeController@editTemplate' );

// ### Download Cv 

Route::get('downloadCV' , 'materializeXController@downloadCV' );

Route::get('/', function () {
    return view('welcome');
});

Route::get('login_', function(){
    return view('Login/login_temp');
});

Route::get('check' , function(){
    return view('admin_panel_template_view.lonely_admin');
});

Route::get('lonely_edit' , function(){
    return view('edit_lonely.lonely_edit');
});

Route::get('template_choose' , function(){
    return view('template_choose.choose');
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
    return view('admin_panel_template_view.materialize_admin');
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
