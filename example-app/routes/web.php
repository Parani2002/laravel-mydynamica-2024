<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee; 
use App\Models\Designation; 


Route::get('/', function () {
    $greetings = ['Welcome','Have a nice day', 'great work'];
    return view('welcome', compact('greetings'));
});

Route::get('/employees', function(){
    $employees = Employee::all();
    // $employees = Employee::with('designation')-> get();
    return view('employee.index', compact('employees'));
});

Route::get('/employee/{id}', function($id){
    $employee = Employee::find($id);
    return view('employee.show', compact('employee'));
});

Route::get('/designations', function(){
    $designations = Designation::all();
    return view('designation.index', compact('designations'));
});
Route::get('/designation/{id}', function($id){
    $employees = Designation::find($id) -> employees;
    $designation = Designation::find($id);
    return view('designation.show', compact('employees','id','designation'));
});






