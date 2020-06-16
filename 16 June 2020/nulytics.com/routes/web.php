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

Route::view('/','home');

// Services routes

Route::view('digital','services.digital');
Route::view('website','services.website');
Route::view('ecommerce','services.ecommerce');
Route::view('mobileapps','services.mobileapps');
Route::view('hardwareit','services.hardwareit');
Route::view('motiongraphics','services.motiongraphics');

//Product routes

Route::view('products','products');

// main page routes

Route::view('about','about');
Route::view('contact','contact');
Route::view('faq','faq');
