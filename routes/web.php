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
Route::auth();
Route::get('/', 'HomeController@index');
Route::get('/Articles', 'PostsController@index');
Route::get('/Contact', 'ContactController@index');
Route::get('/Articles/{post_name}', 'PostsController@show');
Route::post('/Contact', 'ContactController@store');

//---------

Route::prefix('comments')->group(function() {
    Route::post('','CommentsController@store')->name('un_commentaire'); //-- a définir
});

