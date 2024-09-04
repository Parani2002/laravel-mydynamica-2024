<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;

Route::get('/', function () {
    $student_count = Student::all() -> count();
    $grade_count = Grade::all() -> count();
    $subject_count = Subject::all() -> count();
    return view('pages.index',compact('student_count','grade_count','subject_count'));
});

Route::resource('students', StudentController::class);
Route::resource('grades', GradeController::class);
Route::resource('subjects', SubjectController::class);