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

Route::get('/', 'App\Http\Controllers\MenuController@readtoIndex');
Route::post('/tambah-pesan', 'App\Http\Controllers\PesanController@create')->name('tambahpesan');

//Admin Login
Route::get('/admin', function () {
    return view('admin.login-admin');
});
Route::post('/admin-login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => ['cek-login:0']], function () {
//Dashboard
Route::get('/dashboard', 'App\Http\Controllers\MenuController@countMenu');
//Ketegori
Route::get('/data-kategori', 'App\Http\Controllers\KategoriController@read');
Route::get('/tambah-data-kategori', function () {
    return view('admin.tambah-data-kategori');
});
Route::post('/tambah-kategori', 'App\Http\Controllers\KategoriController@create');
Route::delete('/delete-kategori{id}', 'App\Http\Controllers\KategoriController@delete')->name('delete-kategori');
Route::get('/halaman-update-kategori/{id}', 'App\Http\Controllers\KategoriController@halamanupdate')->name('halaman-update-kategori');
Route::put('/update/{Kategori}', 'App\Http\Controllers\KategoriController@update')->name('update');
//Menu
Route::post('/tambah-menu', 'App\Http\Controllers\MenuController@create')->name('tambahdatamenu');
Route::get('/data-menu', 'App\Http\Controllers\MenuController@read');
Route::get('/tambah-data-menu', 'App\Http\Controllers\MenuController@readKategori');
Route::delete('/delete-menu{id}', 'App\Http\Controllers\MenuController@delete')->name('delete-menu');
Route::get('/halaman-update-menu/{id}', 'App\Http\Controllers\MenuController@halamanupdate')->name('halaman-update-menu');
//Pesanan
Route::get('/pesanan-masuk', 'App\Http\Controllers\PesanController@readMasuk');
Route::get('/pesanan-selesai', 'App\Http\Controllers\PesanController@readSelesai');
Route::put('/pesanan-selesai/{Pesan}', 'App\Http\Controllers\PesanController@selesai')->name('selesai');
Route::delete('/delete-pesan{id}', 'App\Http\Controllers\PesanController@delete')->name('delete-pesan');
});