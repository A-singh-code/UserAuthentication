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
Route::get('/',function(){
	return view('/login');
});
Route::get('/register','RegistrationController@register');
Route::post('/register','RegistrationController@postRegister');
Route::get('/login','LoginController@login');
Route::post('/login','LoginController@postlogin');
Route::post('/logout','LoginController@logout');
Route::get('/forgot_password','ForgotpasswordController@forget');
Route::post('/forgot_password','ForgotpasswordController@password');
Route::get('/reset_password/{email}/{code}','ForgotpasswordController@reset');
Route::get('/earnings','Admin/AdminController@earnings')->middleware('admin');
Route::group(['namespace'=>'Admin'], function(){
	Route::resource('admin/home','AdminController');
	//User Route
	// Route::resource('user','UserController');
	// Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	// Route::post('admin-login', 'Auth\LoginController@login');
	// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});