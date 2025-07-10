<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});

require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
