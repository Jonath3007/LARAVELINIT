<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index'); //merujuk ke file index.blade.php di folder resource
});

Route::get('/login', function () {
    return view('login'); //merujuk ke file login.blade.php di folder resource
});


Route::get('/', function () {
    return view('welcome'); //merujuk ke file welcome.blade.php di folder resource
});

Route::get('/about', function () {
    return view('about'); //merujuk ke file welcome.blade.php di folder resource
});
