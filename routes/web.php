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
Route :: get ('/courses', function (){
    return 'Course list'; 
})->name ('courses.index');
Route :: get ('/course-url', function () {
    return route ('courses.index');
});
Route ::redirect ('/old-about', '/about');

Route ::get('/go-to-courses', function(){
    return to_route('courses.index');
});
Route ::get('/tasks', function (){
    return view ('tasks');
});
Route ::post('/tasks', function (){
    return 'POST: Task created successfully!';
});
Route ::put('tasks/{id}', function (string $id){
    return "PUT: Task with ID {$id} updated successfully!";
});
Route ::delete('tasks/{$id}', function (string $id) {
    return "DELETE: Task with ID {$id} deleted successfully!";
});
use App\Http\Controllers\StudentController;
Route ::get('controller/students', [StudentController::class, 'index']);
Route ::get('controller/students/{id}', [StudentController::class, 'show']);