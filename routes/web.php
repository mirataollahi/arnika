<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




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


Route::get('/sepidar', 'ProductController@SepidarAccountingSoftwarw');

Route::post('/sepidar', 'ProductController@sendSepidarRequest');

Route::get('/sepidarrequests' , 'ProductController@showRequests');
Route::get('/', 'AdminController@index');

Auth::routes();


Route::get('admin',  'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/products', 'ProductController@sendSepidarRequest');
Route::get('/admin/products' , 'AdminController@products');
Route::get('/admin/products/create' , 'AdminController@createProductview');
Route::post('/admin/products/create' , 'AdminController@createProduct');
Route::get('/admin/products/delete/{id}', 'AdminController@deleteProduct');
Route::get('/admin/products/edit/{id}', 'AdminController@editProduct');
Route::get('/admin/products/systems/create/{id}', 'AdminController@createSystemView');
Route::post('/admin/products/systems/create', 'AdminController@createSystem');
Route::get('/admin/products/systems/edit/{id}', 'AdminController@editSystemView');
Route::post('/admin/products/systems/edit/{id}', 'AdminController@editSystem');
Route::get('/admin/products/systems/delete/{id}', 'AdminController@deleteSystem');
Route::get('/admin/products/systems/pers/{id}', 'AdminController@presview');
Route::get('/admin/products/systems/pres/create/{id}', 'AdminController@createpreview');
Route::post('/admin/products/systems/pres/create/{id}', 'AdminController@createpre');
Route::get('/admin/products/systems/pres/delete/{id}' , 'AdminController@deletePre');

Route::get('/admin/products/tools/create/{id}', 'AdminController@createToolView');
Route::post('/admin/products/tools/create/{id}', 'AdminController@createTool');
Route::get('/admin/products/tool/delete/{id}', 'AdminController@deleteTool');
Route::get('/admin/products/tool/edit/{id}', 'AdminController@editToolView');
Route::post('/admin/products/tool/edit/{id}', 'AdminController@editTool');
Route::get('/admin/products/tool/pers/{id}', 'AdminController@preToolView');
Route::post('/admin/products/tool/pres/create/{id}', 'AdminController@preToolCreate');
Route::get('/admin/products/tool/pres/delete/{id}', 'AdminController@preTooldelete');

Route::get('/admin/order' , 'AdminController@orders');


Route::get('/admin/users' , 'AdminController@users');


Route::get('/register' , 'PagesController@register');
Route::post('/real_user_register' , 'RegisterController@RealUserRegister');
Route::post('/legal_user_register' , 'RegisterController@LegalUserRegister');






Route::get('/img' , 'ProductController@getImageInformation');

















