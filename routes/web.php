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

Route::get('/', function () {
    return view('welcome');
});

Route::get('add_user', 'Users@save');
Route::get('fetch_user', 'Users@fetch');


Route::get('addpost', 'PostController@addPost');
Route::get('addcom/{id}', 'PostController@addComments');
