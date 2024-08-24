<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});


Route::get('/{page?}',function($page="index"){
    return view('pages.'.$page);
});
