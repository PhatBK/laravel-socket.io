<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongKeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThongKe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soluong_monan');
            $table->integer('soluong_theloai');
            $table->integer('soluong_truycap');
            $table->integer('soluong_taikhoan');
            $table->integer('soluong_anh');
            $table->integer('soluong_baipost');
            $table->integer('soluong_luotthich');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ThongKe');
    }
}
