<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiDangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang', function (Blueprint $table) {
            $table->id();
            $table->Integer('loai');
            $table->string('tieu_de');
            $table->string('noi_dung');
            $table->string('tinh_tp');
            $table->string('quan_huyen');
            $table->string('phuong_xa');
            $table->string('so_dien_thoai');
            $table->dateTime('thoi_gian');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('bai_dang', function (Blueprint $table) {
            $table->unsignedInteger('loai_do_vat_id');
            $table->foreign('loai_do_vat_id')->references('id')->on('loai_do_vat');
        });
        Schema::table('bai_dang', function (Blueprint $table) {
            $table->unsignedInteger('nguoi_dung_id');
            $table->foreign('nguoi_dung_id')->references('id')->on('nguoi_dung');
        });
        Schema::table('bai_dang', function (Blueprint $table) {
            $table->unsignedInteger('trang_thai_bai_dang_id');
            $table->foreign('trang_thai_bai_dang_id')->references('id')->on('trang_thai_bai_dang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_dang');
    }
}
