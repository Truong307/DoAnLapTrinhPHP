<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeoTimDoController extends Controller
{
    public function index()
    {
        return view('user\meotimdo');
    }
}
