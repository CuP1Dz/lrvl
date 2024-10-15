<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class,  'showIndex']) -> name('home');

Route::get('/array', [MainController::class, 'showArray']) -> name('array');

Route::get('/report', [ReportController::class, 'index']) -> name('report.index');