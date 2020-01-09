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

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('/about', function() {
	return '<h1>Halo</h1>'
	    .'Selamat datang di webapp saya<br>'
	    .'Laravel, emang keren.';
});

Route::get('profil', function()
{
	return view('biodata');
});

Route::get('menu', function()
{
	return view('makanan');
});

Route::get('sekolah', function()
{
	return view('profil');
});

Route::get('barang', function()
{
	return view('baju');
});

Route::get('perpus', function()
{
	return view('buku');
});

Route Parameter
Route::get('pesan/{makan}', function($mkn){
	return 'Makanan Yang Saya Pesan Adalah ' .$mkn;
});

Route::get('pesan/{makan}/{minum}/{harga}', function($mkn,$mnm,$hrg){
	return 'Makanan Yang Saya Pesan Adalah ' .$mkn
	        . '<br>Minuman Yang Saya Pesan Adalah ' .$mnm
	        . '<br>Total Harganya Adalah ' .$hrg;
});