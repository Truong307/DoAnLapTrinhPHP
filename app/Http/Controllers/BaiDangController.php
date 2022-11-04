<?php

namespace App\Http\Controllers;

use App\Models\BaiDang;
use Illuminate\Http\Request;

class BaiDangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user\dangbai');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsDangBai = BaiDang::all();
        return view('thongtin', compact('lsDangBai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baiDang = BaiDang::create([
            'loai' => $request->loai_tin,
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'tinh_tp' => $request->tinh_tp,
            'quan_huyen' => $request->quan_huyen,
            'phuong_xa' => $request->phuong_xa,
            'thoi_gian' => $request->thoi_gian,
            'so_dien_thoai' => $request->so_dien_thoai,
            'anh' => $request->file('image')->getClientOriginalName(),
            'path' => $request->file('image')->store('public/images'),
            $file = $request->image,
            $file_name = $file->getClientOriginalName(),
            $file->move(public_path('images'), $file_name),
            $request->merge(['image' => $file_name]),
        ]);

        if (!empty($baiDang)) {
            return redirect()->route('user\dang-bai');
        }
        return redirect()->route('user\trang-chu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
