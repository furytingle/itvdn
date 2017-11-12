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

Route::get('/test', function () {
    return "ITVDN LARAVEL";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/roles', function () {
    $user = \Illuminate\Support\Facades\Auth::user();

    return response()->json([
        'roles' => $user->roles
    ]);
});