<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

Route::get('pengguna/beranda', [PenggunaController::class, 'tampilan']);
