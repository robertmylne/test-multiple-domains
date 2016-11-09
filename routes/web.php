<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return url('/');
});

Route::get('/1', function () {
    return url('/');
});

Route::get('/1/1', function () {
    return url('/');
});

Route::get('/2', function () {
    return url('/');
});
