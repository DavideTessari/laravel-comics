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
})->name('home');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/description/{slug}', function ($slug) {
    $movies = config('dc-comics');
    $movieAr = array_filter($movies, fn($item) => $item['slug'] === $slug);
    $movie = $movieAr[array_key_first($movieAr)];


    return view('description', compact('movie'));
})->name('description');

Route::get('/products', function () {
    $comics = config('comics');

    return view('products', ['comics' => $comics]);
})->name('products');