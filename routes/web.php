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


Route::get('/', 'ArticlesController@index');  // root sẽ là danh sách bài viết
// Route::get('articles', 'ArticlesController@index'); //xem articles

// Route::get('articles/create', 'ArticlesController@create'); // form create articles

// Route::get('articles/{id}', 'ArticlesController@show');//xem chitiet articles

// Route::post('articles', 'ArticlesController@store');// save form

// Route::get('articles/{id}/edit', 'ArticlesController@edit');//sua articles
// Route::patch('articles/{id}', 'ArticlesController@update'); //sua articles

// Route::get('articles/detele/{id}', 'ArticlesController@destroy');//xoa 1 article*/
// // Còn đây tôi đã chuyển sang đặt tên cho các Route



Route::get('articles', ['as' => 'articles.index', 'uses' => 'ArticlesController@index']);
Route::get('articles/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create']);
Route::get('articles/{id}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show']);
Route::post('articles', ['as' => 'articles.store', 'uses' => 'ArticlesController@store']);
Route::get('articles/{id}/edit', ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit']);
Route::patch('articles/{id}', ['as' => 'articles.update', 'uses' => 'ArticlesController@update']);
Route::get('articles/detele/{id}', ['as' => 'articles.destroy', 'uses' => 'ArticlesController@destroy']);

// Route::resource('articles', 'ArticlesController');

Auth::routes();

Route::get('/home', 'ArticlesController@index');
Route::get('articles/truncate', 'ArticlesController@truncate');