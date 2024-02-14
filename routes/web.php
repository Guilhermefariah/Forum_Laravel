<?php

use Illuminate\Support\Facades\Route;

Route::get('/contato', function () {
    return view('site/contact');
});


Route::get('/', function () {
    return view('welcome');
});
