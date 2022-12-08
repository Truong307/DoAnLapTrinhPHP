<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiDang;
use App\Models\LienHe;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function trangchu()
    {
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->paginate(16);
        $lsUser = NguoiDung::all();
        return view('trangchu', compact('lsDangBai', 'lsUser'));
    }
    public function canhbaoluadao()
    {
        return view('canhbaoluadao');
    }
    public function meotimdo()
    {
        return view('meotimdo');
    }
    public function chitietbaidang($id)
    {
        $lsDangBai = BaiDang::find($id);
        $lsUser = NguoiDung::all();
        return view('chitietbaidang', compact('lsDangBai', 'lsUser'));
    }

    public function timKiem(Request $request)
    {
        $lsDangBai = DB::table('bai_dang')->where('tieu_de', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('noi_dung', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('tinh_tp', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('quan_huyen', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('phuong_xa', 'like', '%' . $request->tim_kiem . '%')->paginate(16);
        $lsUser = NguoiDung::all();
        return view('tim-kiem', compact('lsDangBai', 'lsUser'));
        // $timKiemBaiDang = DB::table('bai_dang')
        //     ->where('tieu_de', 'Mất đồ')
        //     ->get();
    }

    public function lienHe()
    {
        return view('lien-he');
    }
    public function xuLyGuiLienHe(Request $request)
    {
        $lienHe = LienHe::create([
            'ten_nguoi_lien_he' => $request->ten_nguoi_lien_he,
            'so_dien_thoai' => $request->so_dien_thoai,
            'email' => $request->email,
            'noi_dung' => $request->noi_dung,
        ]);
        return "Gửi thành công";
    }
}
