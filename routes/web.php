<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index','App\Http\Controllers\ProductController@index')->name('/index');
Route::get('/create','App\Http\Controllers\ProductController@create')->name('/create');


Route::get('/', function () {
    return view('welcome');
});






