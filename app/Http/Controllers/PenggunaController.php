<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    function index()
    {
        return view('Pengguna.tampilan');
    }
}

