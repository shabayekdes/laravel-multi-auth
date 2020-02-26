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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/login','Admin\Auth\LoginController@showAdminLoginForm')->name('show.admin.login');
Route::post('admin/login','Admin\Auth\LoginController@login')->name('admin.login');

Route::group(['middleware'=>'auth:admin'],function (){
    Route::get('admin/dashboard','Admin\HomeController@dashboard')->name('admin.dashboard');
    Route::get('admin/register','Admin\HomeController@showAdminRegistrationForm')->name('show.admin.register');
    Route::post('admin/register','Admin\HomeController@adminRegister')->name('admin.register');
});
