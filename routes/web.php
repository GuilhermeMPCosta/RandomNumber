<?php

use App\Http\Controllers\GenerateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [GenerateController::class, 'index']);
Route::post('/generate',[GenerateController::class,'generate'])->name('generate');