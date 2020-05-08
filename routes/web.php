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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/post', function () {
    return view('post');
});

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

# End Admin Panel Routes
