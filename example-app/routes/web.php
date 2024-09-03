<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\AuthController;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    $count = Student::all() -> count();
    $grade_count = Grade::all() -> count();
    $subject_count = Subject::all() -> count();
    $teacher_count = Teacher::all() -> count();
    $students = Student::all();
    return view('pages.home',compact('students','count','grade_count','subject_count','teacher_count'));
});

Route::get('/tables',function(){
    $students = Student::all();
    return view('pages.tables',compact('students'));
});
Route::get('/charts',function(){
    return view('pages.charts');
});

Route::get('/static',function(){
    return view('pages.static');
});
Route::get('/lightsidenav',function(){
    return view('pages.lightsidenav');
});

Route::get('/401', [ErrorController::class, 'unAuthorize']);
Route::get('/404', [ErrorController::class, 'notFound']);
Route::get('/500', [ErrorController::class, 'internalError']);

Route::get('/login', AuthController::class);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/password', [AuthController::class, 'forgotpassword']);

Route::resource('students', StudentController::class);
Route::resource('grades', GradeController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('teachers', TeacherController::class);