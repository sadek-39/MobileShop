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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/products', 'PagesController@products')->name('products');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', 'AdminPagesController@index')->name('admin.index');
    Route::get('/products', 'AdminPagesController@manage')->name('admin.pages.product.manage');
    Route::get('/product/create', 'AdminPagesController@create')->name('admin.pages.product.create');
    Route::get('/product/edit/{id}', 'AdminPagesController@edit')->name('admin.pages.product.edit');
    Route::post('/product/store', 'AdminPagesController@store')->name('admin.pages.product.store');
    Route::post('/product/edit/{id}', 'AdminPagesController@update')->name('admin.pages.product.update');
    Route::post('/product/manage/{id}', 'AdminPagesController@delete')->name('admin.pages.product.delete');
});


//category controller routes
Route::group(['prefix'=>'category'],function(){
    Route::get('/', 'CategoryController@index')->name('admin.category');
    Route::get('/catcreate', 'CategoryController@create')->name('admin.category.create');
    Route::post('/catstore', 'CategoryController@store')->name('admin.category.store');
    


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



#socialite
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback')->name('facebook.login.callback');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');