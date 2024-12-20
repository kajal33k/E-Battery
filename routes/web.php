<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Frontend.index');
});

// Route::get('/index', function () {
//     return view('Frontend.index');
// });
Route::get('/detail', function (){
    return view('Frontend.detail');
});