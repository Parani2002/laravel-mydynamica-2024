<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student; 
use App\Models\Grade;

Route::get('/', function () {
    $grade = Grade::find(1);
    $students = $grade -> students();
    return view('welcome', ['students' => $students]);
});

Route::get('/students', function () {
    // $students = Student::all();
    $students = Student::with('grade')->get();
   

    return view('student.index', compact('students'));
});
Route::get('/student/{id}', function ($id) {
    $student = Student::find($id);
    return view('student.show', ['student' => $student]);
});
