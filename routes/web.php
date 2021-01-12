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

// Route::post('/load_data', 'HomeController@load_data')->name('loadmore.load_data');
Route::get('/home', 'HomeController@index_user')->name('home');
Route::get('/home/blog', 'HomeController@index_blog')->name('blog');
Route::get('/admin/category', 'CategoryController@index')->name('category.index');
Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');
Route::post('/admin/category/create', 'CategoryController@store')->name('category.store');
Route::get('/admin/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::patch('/admin/category/{id}/edit', 'CategoryController@update')->name('category.update');
Route::delete('/admin/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');

Route::get('/admin/tags/', 'TagsController@index')->name('tags.index');
Route::get('/admin/tags/create', 'TagsController@create')->name('tags.create');
Route::post('/admin/tags/create', 'TagsController@store')->name('tags.store');
Route::get('/admin/tags/{id}/edit', 'TagsController@edit')->name('tags.edit');
Route::patch('/admin/tags/{id}/edit', 'TagsController@update')->name('tags.update');
Route::delete('/admin/tags/{id}/delete', 'TagsController@destroy')->name('tags.destroy');

Route::get('/home/category', 'CategoryController@index_user')->name('kategori');

Route::get('/admin/posts/', 'PostsController@index')->name('posts.index');
Route::get('/admin/posts/create', 'PostsController@create')->name('posts.create');
Route::post('/admin/posts/create', 'PostsController@store')->name('posts.store');
Route::get('/admin/posts/{id}/edit', 'PostsController@edit')->name('posts.edit');
Route::patch('/admin/posts/{id}/edit', 'PostsController@update')->name('posts.update');
Route::delete('/admin/posts/{id}/delete', 'PostsController@destroy')->name('posts.destroy');

Route::get('admin/posts/recycle', 'PostsController@tampil_hapus')->name('posts.tampil_hapus');
Route::get('admin/posts/recycle/{id}', 'PostsController@restore')->name('posts.restore');
Route::delete('admin/posts/recycle/{id}', 'PostsController@kill')->name('posts.kill');

// AUTH
Route::get('/admin/login', 'AuthController@index');
Route::post('/admin/post-login', 'AuthController@postLogin'); 
Route::get('/admin/registration', 'AuthController@registration');
Route::post('/admin/post-registration', 'AuthController@postRegistration'); 
Route::get('/admin/', 'AuthController@dashboard'); 
Route::get('/admin/logout', 'AuthController@logout');

// USERS
Route::get('/admin/user/', 'UserController@index')->name('user.index');

Route::get('/{slug}', 'HomeController@detail')->name('user.detail');

Route::get('/home/cari', 'HomeController@cari')->name('cari');


