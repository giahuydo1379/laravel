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

Route::group(['prefix'=>'/admin', 'middleware' => 'auth'],function(){
    Route::get('/comments','CommentController@showComment');
    Route::post('/option_group', 'Admin\ListOptionGroupController@getListOptionGroup');
    Route::get('/entryProduct','Admin\InsertProductController@insertProduct');
    Route::get('/showproduct','Admin\ListProductController@getListProduct');
    Route::get('/showproductdetails/{id}','Admin\ProductDetailController@showproductDetails');
    Route::post('/process','Admin\InsertProductController@addProduct');
    Route::match(['get','post'],'/option', 'Admin\ListProductController@getListOption');
    Route::get('/deleteProduct/{id}','Admin\DeleteProductController@destroyProduct'); 
    Route::get('/option_create','Admin\ShowInsertOptionController@viewInsertOption');
    Route::post('/option_group_id','Admin\ShowInsertOptionController@getListOptionGroup');
    
    Route::get('/viewInsertGroupOption','Admin\ShowInsertGroupOptionController@viewInsertGroupOption');
    Route::post('/option_groupname','Admin\ShowInsertGroupOptionController@addInsert');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
//Route::get('login','Admin\Login@getLogin');
Route::post('login','Auth\LoginController@postLogin');
