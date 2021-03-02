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


Route::get('/front_page', 'LoginController@index');
Route::get('/home/register', 'homeController@index');
Route::post('/home/register', 'homeController@store_M3F2');

Route::get('/login', 'LoginController@view_login_page');
Route::post('/login', 'LoginController@verify_M1F2');

Route::get('/dashboards/sales_and_marketing_person', 'dashboardController@viewSnmp');
Route::get('/dashboards/accountent', 'dashboardController@viewAccountent');
Route::get('/dashboards/customer', 'dashboardController@viewCustomer');
Route::get('/dashboards/admin', 'dashboardController@viewAdmin');