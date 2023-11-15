<?php

use Illuminate\Support\Facades\Route;

Route::get('saludo', function () {
    return view('saludo::saludo');
});
