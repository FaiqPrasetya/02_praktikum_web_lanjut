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

// Route home
Route::get('/', function () {
    echo "Selamat Datang";
});

// Route about
Route::get('/about', function() {
    echo "NIM   : 2041720239 <br>";
    echo "Nama  : Muhammad Faiq Prasetya <br>";
    echo "Kelas : TI-2D <br>";
});

// Route articles
Route::get('articles/{id}', function($id) {
    echo "Ini merupakan halaman artikel dengan id " . $id;
});
