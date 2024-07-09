<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;




Route::get('/principal', function () {
    return view('principal');
});

Route::get('/principal', [RegisterController::class,'index']);