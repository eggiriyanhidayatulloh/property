<?php

use Illuminate\Support\Facades\Route;

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
    return view('profile.index');
});
Route::get('/dijual', function () {
    return view('profile.dijual');
});
Route::get('/disewa', function () {
    return view('profile.disewa');
});
Route::get('/propertibaru', function () {
    return view('profile.propertibaru');
});
Route::get('/auth/login', function () {
    return view('auth.login');
});
Route::get('/admin/index', function () {
    return view('admin.index');
});
Route::get('/auth/register', function () {
    return view('auth/register');
});