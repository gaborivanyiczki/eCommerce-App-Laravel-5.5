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

Auth::routes();


 Route::group(['middleware' => 'auth'], function (){

    Route::resource('admin/users', 'Admin\AdminUsersController');

    Route::resource('admin/products', 'Admin\AdminProductsController');

    Route::resource('admin/categories', 'Admin\AdminCategoriesController');

    Route::resource('admin/settings', 'Admin\AdminSettingsController');

    Route::get('/admin', ['as' => 'admin', function(){
        return view('admin.index');
    }]);

     Route::get('logout', 'Auth\LoginController@logout');

 });

 Route::group(['middleware' => 'web'], function(){

     Route::get('/', 'HomeController@index')->name('home');

     Route::get('/{slug}', 'HomeController@getCategory')->name('category');

     Route::get('/{slug}/{slug}', 'HomeController@getCategory')->name('subcategory');

 });



