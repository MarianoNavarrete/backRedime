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
Route::get('/materials', 'MaterialsController@index');
Route::delete('/materials', 'MaterialsController@destroy');
Route::put('/materials', 'MaterialsController@update');
Route::post('/materials', 'MaterialsController@store');
Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria', 'CategoriaController@store');