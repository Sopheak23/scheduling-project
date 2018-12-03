<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('buildingA', function() {
    return view('buildingA');
});

Route::get('switchView_buildingA', function() {
    return view('switchView_buildingA');
});

Route::get('roomA1', function() {
    return view('roomA1');
});
Route::get('jQueryTest', function() {
    return view('jQueryTest');
});

