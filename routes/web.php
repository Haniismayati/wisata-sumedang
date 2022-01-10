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
    return redirect()->route('home.index');
});
Route::resource('home', 'HomeController');
Route::resource('profil', 'ProfilController');
Route::resource('Curug', 'CurugController');
Route::resource('taman', 'TamanController');
Route::resource('beranda', 'BerandaController');
