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
    $name = 'Boolean';
    return view('home',compact('name'));
});

Route::get('/contact', function () {
    $contact = '147896';
    return view('contact', compact('contact'));
});

Route::get('/blog', function () {
    
    return view('blog');
});