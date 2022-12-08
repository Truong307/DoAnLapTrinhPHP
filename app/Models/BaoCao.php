<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoCao extends Model
{
    use HasFactory;
    protected $table = 'bai_dang_report';

    protected $fillable = [
        'noi_dung',
        'bai_dang_id',
        'nguoi_dung_id',
    ];

    public function BaiDang()
    {
        return $this->belongsTo(BaiDang::class);
    }

    public function NguoiDung()
    {
        return $this->belongsTo(NguoiDung::class);
    }
}
