<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

Route::get('/beranda', [PenggunaController::class, 'index']);
