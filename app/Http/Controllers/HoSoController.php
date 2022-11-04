<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoSoController extends Controller
{
    public function index()
    {
        return view('user\hoso');
    }
}
