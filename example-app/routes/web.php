<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', function(){
    $employees = Employee::all();
    return view('employee.index', compact('employees'));
});

Route::get('/employee/{id}', function($id){
    $employee = Employee::find($id);
    return view('employee.show', compact('employee'));
});
