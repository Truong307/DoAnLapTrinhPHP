<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiDang;

class TrangChuController extends Controller
{
    public function index()
    {
        $lsDangBai = BaiDang::all();
        return view('trangchu', compact('lsDangBai'));
    }
    public function dangnhap()
    {
        $lsDangBai = BaiDang::all();
        return view('user\trangchu', compact('lsDangBai'));
    }
}
