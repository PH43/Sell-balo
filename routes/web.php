<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Frontend 
Route::get('/','App\Http\Controllers\HomeController@index' );
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
// Route::get('/','App\Http\Controllers\CategoryController@index' );
// Route::get('/trang-chu','App\Http\Controllers\CategoryController@index');
Route::get('/san-pham','App\Http\Controllers\ProductController@index');
Route::get('/404','App\Http\Controllers\HomeController@error_page');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');



Route::get('/san-pham/{productID}','App\Http\Controllers\ProductController@show_detail');




Route::get('/all-category','App\Http\Controllers\CategoryController@show_all');
Route::get('/add-category','App\Http\Controllers\CategoryController@create');
Route::post('/save-category','App\Http\Controllers\CategoryController@store');


Route::get('/admin','App\Http\Controllers\AdminController@index');