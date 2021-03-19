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
    return view('front_page');
});


Route::get('/front_page', 'LoginController@index');
Route::get('/home/register', 'homeController@index');
Route::post('/home/register', 'homeController@store_M3F2');

Route::get('/login', 'LoginController@view_login_page');
Route::post('/login', 'LoginController@verify_M1F2');

Route::get('/dashboards/sales_and_marketing_person', 'dashboardController@viewSnmp')->name('dashboard');
Route::get('/dashboards/accountent', 'dashboardController@viewAccountent');
Route::get('/dashboards/customer', 'dashboardController@viewCustomer');
Route::get('/dashboards/admin', 'dashboardController@viewAdmin');

Route::get('/system/sales/physical_store_insert', 'salesController@physical_store_sales_insert');
Route::post('/system/sales/physical_store_insert', 'salesController@physical_store_sales_data_entry');

Route::get('/system/sales/all_sold_products', 'salesController@current_and_last_seven');

///Excel file import


Route::get('/import_data', 'excelFileController@take_sales_data');

Route::post('/import_data', 'excelFileController@sales_data_to_db');

///Excel file import



Route::get('/system/sales/social_media', 'salesController@social_media_sales_list');
Route::get('/system/sales/ecommerce', 'salesController@ecommerce_website_sales_list');

Route::get('/system/sales/current_sales', 'salesController@current_and_last_seven');

Route::get('/system/sales/physical_store', 'salesController@physical_store_sales_list');



Route::get('/system_sales/product_details/{id}', 'salesController@product_details');

Route::get('/system_sales/product_details_social_media/{id}', 'salesController@product_details_social_media');



Route::get('/product/insert_product', 'productController@view_insert_product');

Route::post('/product/insert_product', 'productController@insert_product');



Route::get('/product/existing_product', 'productController@existing_product');


Route::get('/existing/product_details/{id}', 'productController@existing_product_details');

Route::get('/existing/product_edit/{id}', 'productController@product_edit_view');

Route::post('/existing/product_edit/{id}', 'productController@product_save_change');



Route::get('/existing/product_delete/{id}', 'productController@product_delete_view');
Route::post('/existing/product_delete/{id}', 'productController@product_delete_final');



//upcomming Product

Route::get('/product/upcomming_product', 'productController@upcomming_product');



Route::get('/upcomming/product_details/{id}', 'productController@upcomming_product_details');


Route::get('/upcomming/product_edit/{id}', 'productController@upcomming_product_edit_view');

Route::post('/upcomming/product_edit/{id}', 'productController@upcomming_product_save_change');



Route::get('/upcomming/product_delete/{id}', 'productController@upcomming_product_delete_view');
Route::post('/upcomming/product_delete/{id}', 'productController@upcomming_product_delete_final');



Route::get('/logout', 'logoutController@index');


