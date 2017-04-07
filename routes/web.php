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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('landing');
});
// Route::post('/user/register',['as'=>'afterReg',function(){
// 	array('uses'=>'LoginRegister@postRegister');
// }]);
// Route::post('/user/register',array('uses'=>'LoginRegister@postRegister'));
Auth::routes();

Route::get('/home', 'HomeController@index');


// Route::get('/admin/login','Auth/AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/admin/login','Auth/AdminLoginController@login')->name('admin.login.submit');
// Route::get('/admin', 'AdminController@index'); // It should be after previous two, otherwise they wont even occur as catch block in exception

// Route::prefix('admin')->group(function(){
// Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::get('/', 'AdminController@index')->name('admin.dashboard');
// });


Route::GET('admin/home','AdminController@index')->name('admin.home');
Route::GET('admin/editor','EditorController@index')->name('admin.editor');
Route::GET('admin/general','EditorController@general');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::GET('admin/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::POST('admin/register','Admin\RegisterController@register')->name('admin.register.submit');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::GET('register/verify/{token}','Auth\RegisterController@verify');
Route::GET('admin/register/verify/{token}','Admin\RegisterController@verify');

// For employers
Route::GET('employer','Employer\LoginController@showLoginForm')->name('employer.login');
Route::POST('employer/register','Employer\RegisterController@register')->name('employer.register.submit');
Route::GET('employer/register','Employer\RegisterController@showRegistrationForm')->name('employer.register');

Route::GET('employer/home','EmployerController@index')->name('employer.home');
Route::GET('employer','Employer\LoginController@showLoginForm')->name('employer.login');
Route::GET('employer/register','Employer\RegisterController@showRegistrationForm')->name('employer.register');
Route::POST('employer/register','Employer\RegisterController@register')->name('employer.register.submit');
Route::POST('employer','Employer\LoginController@login');
Route::POST('employer-password/email','Employer\ForgotPasswordController@sendResetLinkEmail')->name('employer.password.email');
Route::GET('employer-password/reset','Employer\ForgotPasswordController@showLinkRequestForm')->name('employer.password.request');
Route::POST('employer-password/reset','Employer\ResetPasswordController@reset');
Route::GET('employer-password/reset/{token}','Employer\ResetPasswordController@showResetForm')->name('employer.password.reset');


Route::GET('register/verify/{token}','Employer\RegisterController@verify');
Route::GET('employer/register/verify/{token}','Employer\RegisterController@verify');