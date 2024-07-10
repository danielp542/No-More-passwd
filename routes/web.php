<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\RegisterController;




Route::get('/principal', function () {
    return view('principal');
});

// registro de ususario
Route::get('/registrate', [RegisterController::class,'index']);
Route::post('/registro',[RegisterController::class,'registro']);
// pos reguistro 

Route::get('/muros',[PosController::class,'indexx'])->name('sisa');
Route::get('/muros',[PosController::class,'indexx'])->middleware('auth');

// login 