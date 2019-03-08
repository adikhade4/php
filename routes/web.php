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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', 'BlogController@index');
Route::get('/', 'BlogController@show');
Route::post('/blogs/create', 'BlogController@create');
Route::post('/', 'BlogController@store');
Route::get('/blogs/{blog_id}','CommentsController@show');
Route::post('/blogdetails/{blog}/comments','CommentsController@store');


