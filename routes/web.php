<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Watch;
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
    return view('home.welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'watchs'], function () {
    Route::group(['as' => 'watchs'], function () {
        Route::get('/',   [Watch\WatchController::class, 'index'])->name('.index');
        Route::get('/create',   [Watch\WatchController::class, 'create'])->name('.create');
        Route::post('/store',   [Watch\WatchController::class, 'store'])->name('.store');
        Route::put('/{id}',   [Watch\WatchController::class, 'update'])->name('.update');
    });
});

Route::group(['prefix' => 'type'], function () {
    Route::group(['as' => 'type'], function () {
        Route::get('/',   [Watch\WatchTypeController::class, 'index'])->name('.index');
        Route::get('/create',   [Watch\WatchTypeController::class, 'create'])->name('.create');
        Route::post('/store',   [Watch\WatchTypeController::class, 'store'])->name('.store');
        Route::put('/{id}',   [Watch\WatchTypeController::class, 'update'])->name('.update');
    });
});
