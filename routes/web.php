<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return "Ini adalah halaman awal Home";
// });
Route::get('/', function () {
    return view('welcome', [
    "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title" => "About"
    ]);
});

Route::get('/rooms', function () {
    return view('rooms', [
    "title" => "Rooms"
    ]);
});
// // Menampilkan daftar product ( route prefix)
// // https://www.educastudio.com/category/marbel-edu-games
// // https://www.educastudio.com/category/marbel-and-friends-kids-games
// // https://www.educastudio.com/category/riri-story-books
// // https://www.educastudio.com/category/kolak-kids-songs

Route::get('/news', function () {
    return view('news', [
    "title" => "News"
    ]);
});
// // Menampilkan Daftar berita (route param)
// // https://www.educastudio.com/news
// // https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19

Route::get('/dinning', function () {
    return view('dinning', [
    "title" => "Dinning"
    ]);
});
// // Halaman Program
// // Menampilkan Daftar Program (route prefix)
// // https://www.educastudio.com/program/karir
// // https://www.educastudio.com/program/magang
// // https://www.educastudio.com/program/kunjungan-industri

// Route::get('/about-us', function () {
//     return '<a href="https://www.educastudio.com/about-us">
//     Ini adalah halaman About Us Educa Studio</a>';
// });
// // Menampilkan About Us (route biasa)
// // https://www.educastudio.com/about-us

Route::get('/contact', function () {
    return view('contact', [
    "title" => "Contact"
    ]);
});
// Halaman Contact Us
// Menampilkan Contact Us (route resource only)
// https://www.educastudio.com/contact-us
// (Bisa Post kontak ke backend)