<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravelfff' => app()->version()];
});

require __DIR__ . '/auth.php';
