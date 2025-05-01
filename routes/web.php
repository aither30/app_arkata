<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KibController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [KibController::class, 'manage'])->name('home');
