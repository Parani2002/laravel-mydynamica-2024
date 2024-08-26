<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\AuthController;
use App\Models\Student;


Route::get('/', function () {
    return view('pages.home');
});


// Route::get('/home',function(){
//     $students = Student::all();
//     return view('pages.home', compact('students'));
// });
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

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/password', [AuthController::class, 'forgotpassword']);

