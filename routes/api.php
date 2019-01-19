<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Get list of Products
Route::get('products','ProductController@index');

// Get specific Product
Route::get('product/{id}','ProductController@show');

// Delete a Product
Route::delete('product/{id}','ProductController@destroy');

// Update existing Product
Route::put('product/{id}','ProductController@update');

// Create new Product
Route::post('product','ProductController@store');