<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::group([    'excluded_middleware' => ['auth']], function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

