<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('list', 'Users@index');
Route::post('product', 'Products@save');
Route::put('update', 'Products@update');
Route::post('channel', 'ChannelController@save');
Route::get('getdata', 'Products@list');
Route::post('posts', 'PostController@addPost');
Route::get('post/{id}', 'PostController@index');
Route::get('products', 'Products@list');
