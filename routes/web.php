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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

// Route::post('/search', function () {
//     $q = Input::get('name');
//     dd($d);
// });


Route::get('/blog', 'PagesController@index');


Route::get('/home/posts', 'PostsController@index');
Route::get('/home/comments', 'CommentsController@index');
Route::get('/home/posts/create', 'PostsController@create');
Route::get('/home/posts/{id}', 'PostsController@show');
Route::get('/home/posts/{id}/edit', 'PostsController@edit');
Route::get('/home/posts/{id}/destroy', 'PostsController@destroy');
Route::get('/home/comments/{id}', 'CommentsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');
Route::resource('blog', 'PagesController');

//comments
Route::post('comments/{post_id}', ['uses'=>'CommentsController@store', 'as'=>'comments.store']);


Route::post('/blog/search/', ['uses'=>'PagesController@searchPost', 'as'=>'pages.searchPost']);