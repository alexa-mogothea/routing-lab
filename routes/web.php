<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route ::get('/hello', function() {
    return 'Hello, Laravel routing!';
});
Route ::get('/school', function(){
    return 'Welcome to our Laravel Class!';
});
