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


Route::get('/',function(){
	return view('index');
});
Route::get('gioithieu',function(){
	return view('gioithieu');
});
Route::get('/',function(){
	return view('home');
});
Route::get('dichvu',function(){
	return view('dichvu');
});
Route::get('bosuutap',function(){
	return view('bosuutap');
});
Route::get('lienhe',function(){
	return view('lienhe');
});
Route::get('login',function(){
	return view('login');
});
Route::get('tintuc',function(){
	return view('tintuc');
});
