<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontpage');
});

Route::get('/om', function () {
    return view('aboutus');
});

Route::get('/kontakt', function () {
    return view('contact');
});

Route::get('/infoskærm', function () {
    return view('infoscreen');
});
