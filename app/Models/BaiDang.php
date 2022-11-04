<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BaiDang extends Model
{
    use HasFactory;

    protected $table = 'bai_dang';

    protected $fillable = [
        'loai',
        'tieu_de',
        'noi_dung',
        'tinh_tp',
        'quan_huyen',
        'phuong_xa',
        'so_dien_thoai',
        'thoi_gian',
        'anh',
        'path'
    ];
}
