<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaoCao extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'bai_dang_report';

    protected $fillable = [
        'noi_dung',
        'bai_dang_id',
        'nguoi_dung_id',
    ];

    public function BaiDang()
    {
        return $this->belongsTo(BaiDang::class,'bai_dang_id');
    }

    public function NguoiDung()
    {
        return $this->belongsTo(NguoiDung::class,'nguoi_dung_id');
    }
}
