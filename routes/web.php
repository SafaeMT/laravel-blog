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

use App\Http\Controllers\CommentsController;

Route::get('/', 'HomeController@index');

//--------- Comments
Route::prefix('/articles')->group(function() {
    Route::post('/comment','CommentsController@store')->name('comment'); 
});

Route::get('/articles', 'PostsController@index');
Route::get('/articles/{post_name}', 'PostsController@show')->name('articles.show');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
// No need for 'show', we'll use get:/articles/{post_name} to show the article
Route::resource('admin/articles', 'ArticlesController')->except(['show']);
