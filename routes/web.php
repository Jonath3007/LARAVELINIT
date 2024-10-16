<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('index'); //merujuk ke file index.blade.php di folder resource
});

Route::get('/login', function () {
    return view('login'); //merujuk ke file index.blade.php di folder resource
});


Route::get('/', function () {
    return view('welcome'); //merujuk ke file welcome.blade.php di folder resource
});
