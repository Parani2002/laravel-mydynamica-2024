<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('pages.home');
});


Route::get('/home',function(){
    return view('pages.home');
});
Route::get('/tables',function(){
    return view('pages.tables');
});
Route::get('/charts',function(){
    return view('pages.charts');
});





Route::get('/401', [ErrorController::class, 'unAuthorize']);
Route::get('/404', [ErrorController::class, 'notFound']);
Route::get('/500', [ErrorController::class, 'internalError']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot', [AuthController::class, 'forgotpassword']);