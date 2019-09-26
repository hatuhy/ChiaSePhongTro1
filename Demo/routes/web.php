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

Route::get('dangnhap', 'page@getdangnhap');

Route::post('dangnhap','page@postdangnhap');

Route::get('dnthanhcong',function(){
	return view('thanhcong');
});

Route::get('index',function(){
	return view('user.home');
});