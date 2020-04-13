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

use App\Http\Controllers\CommentsController;


Route::get('/', 'HomeController@index');
Route::get('/Contact', 'ContactController@index');
Route::post('/Contact', 'ContactController@store');

//---------Commentaires
//Route::resource('posts.comments.store', 'CommentsController');
Route::prefix('/Articles')->group(function() {
    Route::get('/', 'PostsController@index');
    Route::get('/{post_name}', 'PostsController@show')->name('article');
    Route::post('/comment','CommentsController@store')->name('comment'); //pb de definition de la route
});

//---- Athentificatioon
Route::auth();

Route::get('/Register', 'RegisterController@create');
Route::get('/Login', 'LoginrController@login');
Route::get('/Logout', 'LoginrController@logout');


