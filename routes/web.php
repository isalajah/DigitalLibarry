<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
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
    return view('guest.index');
});

Route::group(['middleware' => ['auth', 'role:users']], function () {
    Route::get('/user', 'dashboardController@user')->name('guest.index');
    Route::post('koleksi', 'listController@koleksi')->name('list.koleksi');
    Route::get('koleksi', 'listController@index')->name('list.index');
    Route::delete('koleksi/{id}', 'listController@destroy')->name('list.destroy');
    Route::get('pinjam/{id}', 'pesanController@pinjam')->name('pesan.pinjam');
});
Route::group(['middleware' => ['auth', 'role:admin']], function () {

});
Route::group(['middleware' => ['auth', 'role:petugas']], function () {

});

//kategori
Route::get('kategori', 'kategoriController@index')->name('kategori.index');
Route::get('kategori/create', 'kategoriController@create')->name('kategori.create');
Route::post('kategori', 'kategoriController@store')->name('kategori.store');
Route::get('kategori/{id}', 'kategoriController@edit')->name('kategori.edit');
Route::put('kategori/update/{id}', 'kategoriController@update')->name('kategori.update');
Route::delete('kategori/{id}', 'kategoriController@destroy')->name('kategori.destroy');


//buku
Route::get('buku', 'bukuController@index')->name('buku.index');
Route::get('buku/create', 'bukuController@create')->name('buku.create');
Route::post('buku', 'bukuController@store')->name('buku.store');
Route::get('buku/{id}', 'bukuController@edit')->name('buku.edit');
Route::put('buku/update/{id}', 'bukuController@update')->name('buku.update');
Route::delete('buku/{id}', 'bukuController@destroy')->name('buku.destroy');

//ulasan
Route::get('ulasan', 'ulasanController@index')->name('ulasan.index');
Route::get('ulasan/create', 'ulasanController@create')->name('ulasan.create');
Route::post('ulasan', 'ulasanController@store')->name('ulasan.store');
Route::get('ulasan/{id}', 'ulasanController@edit')->name('ulasan.edit');
Route::put('ulasan/update/{id}', 'ulasanController@update')->name('ulasan.update');
Route::delete('ulasan/{id}', 'ulasanController@destroy')->name('ulasan.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin
Route::get('/admin', 'dashboardController@admin')->name('admin.index');
//user


//pinjam

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userBuku', 'dashboardController@buku')->name('guest.userBuku');


