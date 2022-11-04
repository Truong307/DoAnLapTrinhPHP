<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiTietBaiDangController extends Controller
{
    public function index()
    {
        return view('user\chitietbaidang');
    }
}
