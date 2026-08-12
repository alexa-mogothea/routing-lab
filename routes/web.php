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
Route ::get('/about', function(){
    return view('about');
});
Route ::get('/students/{id}', function(string $id) {
    return "Student ID: {$id}";
})->name('students.show');
Route ::get('/welcome/{name}', function(?string $name='Student') {
    return "Welcome, {$name}!";
});
