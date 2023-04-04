<?php

use Illuminate\Support\Facades\Route;

// Маршруты аутентифицированного пользователя

//После реализации страниц в кабинете пользователя добавить middleware('auth')
// Route::prefix('user')->middleware('auth')->group(function () {


Route::prefix('user')->group(function () {
    Route::redirect('/', '/visits')->name('user');


});