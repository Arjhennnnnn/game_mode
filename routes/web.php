<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::redirect('/users', '/');

Route::get('/home',function(){
    return view('first_layout.home');
});
Route::get('/about',function(){
    return view('first_layout.about');
});

Route::get('/employee',function(){
    return view('first_layout.employee');
});


