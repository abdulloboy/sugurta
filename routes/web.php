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
    Auth::loginUsingId(1);
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('obyekts', App\Http\Controllers\ObyektController::class);


Route::resource('risks', App\Http\Controllers\RiskController::class);


Route::resource('oqibats', App\Http\Controllers\OqibatController::class);


Route::resource('mahsulots', App\Http\Controllers\MahsulotController::class);
