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

Auth::routes();

Route::get('/', 'ViewController@index')->name('home');
Route::get('/post/{id}', 'ViewController@post')->name('post');


Route::get('/search', function(){
    return view('search');
});


# Admin Panel Routes

Route::get('/admin', 'AdminPanelController@index')->name('admin');

# User section
Route::get('/admin/user/list/', 'AdminPanelController@userList')->name('user-list');
Route::get('/admin/user/update/{id}', 'AdminPanelController@userEdit');
Route::post('/admin/user/update/update/', 'AdminPanelController@userUpdate')->name('user-update');
Route::get('/admin/user/delete/{id}', 'AdminPanelController@userDelete');
Route::get('/admin/user/create/', 'AdminPanelController@userNew');
Route::post('/admin/user/create/create', 'AdminPanelController@userCreate');

# Categories section
Route::get('/admin/category/list/', 'AdminPanelController@categoryList')->name('category-list');
Route::get('/admin/category/update/{id}/', 'AdminPanelController@categoryEdit');
Route::post('/admin/category/update/update', 'AdminPanelController@categoryUpdate')->name('category-update');
Route::get('/admin/category/delete/{id}', 'AdminPanelController@categoryDelete');
Route::get('/admin/category/create/', 'AdminPanelController@categoryNew');
Route::post('/admin/category/create/create', 'AdminPanelController@categoryCreate');


# Tags section
Route::get('/admin/tag/list/', 'AdminPanelController@tagList')->name('tag-list');
Route::get('/admin/tag/update/{id}/', 'AdminPanelController@tagEdit');
Route::post('/admin/tag/update/update', 'AdminPanelController@tagUpdate')->name('tag-update');
Route::get('/admin/tag/delete/{id}', 'AdminPanelController@tagDelete');
Route::get('/admin/tag/create/', 'AdminPanelController@tagNew');
Route::post('/admin/tag/create/create', 'AdminPanelController@tagCreate');


# Goods Section
Route::get('/admin/good/list/', 'AdminPanelController@goodList')->name('good-list');
Route::get('/admin/good/update/{id}/', 'AdminPanelController@goodEdit');
Route::post('/admin/good/update/update', 'AdminPanelController@goodUpdate')->name('good-update');
Route::get('/admin/good/delete/{id}', 'AdminPanelController@goodDelete');
Route::get('/admin/good/create/', 'AdminPanelController@goodNew');
Route::post('/admin/good/create/create', 'AdminPanelController@goodCreate');

# End Admin Panel Routes
