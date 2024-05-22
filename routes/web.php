<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Aashish-1234', function () {
    return view('detail'); // resourcese/view/detail.blade.php
});