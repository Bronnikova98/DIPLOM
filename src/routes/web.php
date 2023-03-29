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

Route::view('/', 'home.index')->name('home');
Route::redirect('/home', '/')->name('home.redirect');
Route::view('/about', 'home.about')->name('about');
Route::view('/contacts', 'home.contacts')->name('contacts');
Route::view('/services', 'home.services')->name('services');
Route::view('/patients', 'home.patients')->name('patients');
Route::view('/specialists', 'home.specialists')->name('specialists');
Route::view('/news', 'home.news')->name('news');
