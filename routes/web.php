<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


//login
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') -> middleware('auth');

//home
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

//berita
Route::get('/gempa-aceh', function () {
    return view('pages/berita/gempa-aceh');
});

Route::get('/banjir-bencana-tahunan', function () {
    return view('pages/berita/banjir-bencana-tahunan');
});

Route::get('/gunung-meletus', function () {
    return view('pages/berita/gunung-meletus');
});

Route::get('/banjir-masyarakat-terjebak', function () {
    return view('pages/berita/banjir-masyarakat-terjebak');
});

Route::get('/banjir-surabaya-kok-bisa', function () {
    return view('pages/berita/banjir-surabaya-kok-bisa');
});

Route::get('/kebarakan-hutan', function () {
    return view('pages/berita/kebakaran-hutan');
});

Route::get('/gempa-terjadi-lagi', function () {
    return view('pages/berita/gempa-terjadi-lagi');
});

Route::get('/angin-puting-beliung', function () {
    return view('pages/berita/angin-puting-beliung');
});

Route::get('/banjir-lagi', function () {
    return view('pages/berita/banjir-lagi');
});

Route::get('/gempa-melanda', function () {
    return view('pages/berita/gempa-melanda');
});

Route::get('/darurat-gunung-meletus', function () {
    return view('pages/berita/darurat-gunung-meletus');
});

Route::get('/tanah-longsor-terparah', function () {
    return view('pages/berita/tanah-longsor-terparah');
});




// user
Route::group(['middleware' => ['auth','ceklevel:user']], function (){

    //laporan
Route::resource('/blogs', \App\Http\Controllers\BlogController::class);

Route::get('/jawa-timur', function () {
    return view('pages/laporan/jawa-timur');
});

Route::get('/jawa-barat', function () {
    return view('pages/laporan/jawa-barat');
});

Route::get('/jawa-tengah', function () {
    return view('pages/laporan/jawa-tengah');
});

Route::get('/kalimantan', function () {
    return view('pages/laporan/kalimantan');
});

Route::get('/sumatera', function () {
    return view('pages/laporan/sumatera
    ');
});

Route::get('/sulawesi', function () {
    return view('pages/laporan/sulawesi');
});

});


//admin
Route::group(['middleware' => ['auth','ceklevel:admin']], function (){
    Route::get('/admin', function () {
        return view('admin');
    });
    Route::resource('/histori', \App\Http\Controllers\BlogController::class);
    

    Route::resource('/users', \App\Http\Controllers\UserController::class);
});
