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
    return view('home');
});
Route::get('/about', function () {
    return view('wip');
});
Route::get('/contact', function () {
    return view('wip');
});
Route::get('/privacy', function () {
    return view('wip');
});
Route::get('/tnc', function () {
    return view('wip');
});

Route::post('/upload', 'FileController@upload');

Route::get('/files', 'FileController@index');

Route::get('/files/{slug}', 'FileController@show');
Route::get('/download/{slug}', 'FileController@download');
Route::get('/test', 'FileController@test');

