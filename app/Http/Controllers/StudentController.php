<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(): string
  {
    return 'Student list is from StudentController';
  }
  public function show($id): string
  {
    return "Student {$id} from StudentController";
  }
}
