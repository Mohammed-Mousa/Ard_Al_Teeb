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




// front end router
Route::get('/', function () {
	return view('frontend/home');
});
Route::get('/perfume', function () {
	return view('frontend/perfume');
});