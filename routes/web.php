<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

Auth::routes();

Route::group([    'excluded_middleware' => ['auth']], function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/order-new', [OrderController::class, 'store']);
