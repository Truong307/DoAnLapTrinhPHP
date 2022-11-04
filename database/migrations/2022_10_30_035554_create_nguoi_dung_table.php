<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiDungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dung', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('username');
            $table->string('password');
            $table->string('so_dien_thoai');
            $table->string('email');
            $table->string('dia_chi');
            $table->Integer('loai'); //0 la admin, 1 la user
            $table->Integer('trang_thai'); //0 la online, 1 la offline
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_dung');
    }
}
