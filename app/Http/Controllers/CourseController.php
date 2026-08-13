<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(): string
 {
  return 'Course list is from CourseController';
 }
public function show($id): string
{
    return "Course {$id} from CourseController";
}
}
  
 

