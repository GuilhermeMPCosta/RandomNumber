<?php

use App\Http\Controllers\GenerateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/generate',[GenerateController::class,'generate'])->name('generate');