<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//追加するコード
Route::get('/building', function () {
    return '建物です';
});

Route::get('/building/{msg}', function ($msg) {
    return "部屋番号は" . $msg . "です";
});