<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee; 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/students', function () {
//     $students = Student::all();
//     return view('student.index', compact('students'));
// });
// Route::get('/student/{id}', function ($id) {
//     $student = Student::find($id);
//     return view('student.show', ['student' => $student]);
// });

Route::get('/employees', function(){
    $employees = Employee::all();
    return view('employee.index', compact('employees'));
});

Route::get('/employee/{id}', function($id){
    $employee = Employee::find($id);
    return view('employee.show', compact('employee'));
});
