<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Pages
Route::get('/', 'Utama@index');
Route::get('/login', 'Login@index');
Route::get('/keranjang', 'Order@Keranjang');
Route::get('/checkout', 'Order@Checkout_List');
Route::get('/confirm', 'Order@Confirm');
Route::get('/contact', 'Order@Contact');
// APIs
// Datas
Route::post('/pushData', 'Utama@store');
Route::post('/AddCart', 'Order@Order');
Route::get('/Checkout', 'Order@Checkout');
Route::post('/Konfirm', 'Order@Confirm_Simpan');
// Users
Route::post('/Daftar', 'Login@Register');
Route::post('/Masuk', 'Login@Masuk');
Route::get('/Keluar', 'Login@Keluar');
