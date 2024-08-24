<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student; 
use App\Models\Grade;
use App\Models\Subject;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/students', function () {
//     $students = Student::all() 
//     // $students = Student::with('subjects') -> get();
//     return view('student.index', compact('students'));
// });

// Route::get('/student/{id}', function ($id) {
//     $student = Student::find($id);
//     return view('student.show', ['student' => $student]);
// });



// Route::get('/grades', function () {
//     $grades = Grade::all();
//     return view('grade.index', compact('grades'));
// });
// Route::get('/grade/{id}', function ($id) {
//     $students = Grade::find($id) -> students;
//     $subjects = Grade::find($id) -> subjects;
//     $grade = Grade::find($id);
//     return view('grade.show', compact('students','subjects','grade'));
// });

// Route::get('/subjects', function () {
//     $subjects = Subject::all();
//     return view('subject.index', compact('subjects'));
// });

// Route::get('/subject/{id}', function ($id) {
//     $students = Subject::find($id) -> students;
//     $grades = Subject::find($id) -> grade;
//     $subject = Subject::find($id);
//     return view('subject.show', compact('students','grades','subject'));
// });


Route::resource('students', StudentController::class);
Route::resource('grades', GradeController::class);
Route::resource('subjects', SubjectController::class);



