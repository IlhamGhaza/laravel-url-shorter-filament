<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use App\Http\Controllers\ShortController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr', [QrController::class, 'index'])->name('qr.index');
Route::get('/generate', [QrController::class, 'generate'])->name('qr.generate');

Route::get('/short', [ShortController::class, 'index'])->name('short.index');
