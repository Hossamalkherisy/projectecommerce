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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/all', function () {
    return view('Allproduct');
});
Route::get('/selected', function () {
    return view('selectproduct');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/eidtp', function () {
    return view('eidtproduct');
});
Route::get('/addp', function () {
    return view('addproduct');
});
Route::get('/deletep', function () {
    return view('deleteproduct');
});
Route::get('/eidtc', function () {
    return view('eidtcategory');
});
Route::get('/addc', function () {
    return view('addcategory');
});
Route::get('/deletec', function () {
    return view('deletecategory');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('showadmin');
});
Route::get('/c', function () {
    return view('contact');
});