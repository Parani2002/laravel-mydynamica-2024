<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student; 

Route::get('/', function () {
    return view('welcome');
});

