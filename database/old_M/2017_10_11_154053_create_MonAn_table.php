<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MonAn', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_monan');
            $table->string('gioithieu');
            $table->string('nguyen_lieu_chinh');
            $table->string('nguyen_lieu_phu');
            $table->string('giavi');
            $table->string('do_kho');
             $table->integer('so_buoc');
            $table->integer('so_luot_xem');
            $table->integer('so_luot_thich');
            $table->integer('so_buoc_thuc_hien');
            $table->integer('id_mucdich')->unsigned();
            $table->integer('id_loaimon')->unsigned();
            $table->integer('id_congdung')->unsigned();
            $table->integer('id_vungmien')->unsigned();
            $table->timestamps();
            $table->foreign('id_mucdich')->references('id')->on('MucDich')->onDelete('cascade');
            $table->foreign('id_loaimon')->references('id')->on('LoaiMon')->onDelete('cascade');
            $table->foreign('id_congdung')->references('id')->on('CongDung')->onDelete('cascade');
            $table->foreign('id_vungmien')->references('id')->on('VungMien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MonAn');
    }
}
