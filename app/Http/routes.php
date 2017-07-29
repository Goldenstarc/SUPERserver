<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/app', function (){


    return \App\Product::all();

});





Route::group(['middleware'=>'admin'] , function(){

    Route::resource('/admin/users' , 'AdminUserController');

    Route::resource('admin/posts' , 'AdminPostsController');

    Route::resource('admin/categories' , 'AdminCategoriesController');

    Route::resource('admin/brands' , 'AdminBrandsController');

    Route::resource('admin/psf' , 'AdminProductSpecificationController');

    Route::resource('admin/products' , 'AdminProductsController');

    Route::get('/admin' , function (){
        return view('admin.index');
        return view('admin.aboutpjax');
    });
});