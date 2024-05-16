<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/advice/advice', function () {
    return view('/advice/advice');
});

Route::get('/result/result', function () {
    return view('/result/result');
});

Route::get('/question/survey-start', function () {
    return view('/question/survey-start');
});

Route::get('/blog/blog-post', function () {
    return view('/blog/blog-post');
});

Route::get('/result/result-hight', function () {
    return view('/result/result-hight');
});

Route::get('/result/result-light', function () {
    return view('result/result-light');
});

Route::get('result/more-detail-result', function () {
    return view('result/more-detail-result');
});