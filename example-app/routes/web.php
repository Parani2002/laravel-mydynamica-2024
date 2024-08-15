<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $students = Student::all();
    return view('student.index', compact('students'));
});
Route::get('/student/{id}', function ($id) {
    $student = Student::find($id);
    return view('student.show', ['student' => $student]);
});
