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
|middleware('auth:api')->
*/
Route::get('/all', 'Admin\Addstudent@index');
Route::post('/add', 'Admin\Addstudent@store');
Route::get('/search', 'Admin\Addstudent@find');
Route::get('/delete', 'Admin\Addstudent@delete');

