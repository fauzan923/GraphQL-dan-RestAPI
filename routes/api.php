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

Route::get('/students', 'StudentController@get');
Route::post('/student', 'StudentController@post');
Route::put('/student/{id}', 'StudentController@put');
Route::delete('/student/{id}', 'StudentController@delete');
