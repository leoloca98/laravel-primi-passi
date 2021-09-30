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
});

Route::get('/darkred', function () {
    return view('darkred');
})->name('red');

Route::get('/forestgreen', function () {
    return view('forestgreen');
})->name('green');

Route::get('/goldenrod', function () {
    return view('goldenrod');
})->name('gold');

Route::get('/cadetblue', function () {
    return view('cadetblue');
})->name('blue');
