<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
Route::get('/', function () {
    return view('welcome');
});

//route resource pasien
Route::resource('pasien', PasienController::class);