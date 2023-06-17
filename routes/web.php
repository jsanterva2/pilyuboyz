<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/about', function () {
    return view('home.about');
})->name('home.about');

Route::get('/races', function () {
    return view('home.races');
})->name('home.races');

Route::get('/riders', function () {
    return view('home.riders');
})->name('home.riders');

Route::get('/gallery', function () {
    return view('home.gallery');
})->name('home.gallery');

Route::get('/contact', function () {
    return view('home.contact');
})->name('home.contact');

Route::get('/login', function () {
    return view('home.login');
})->name('home.login');