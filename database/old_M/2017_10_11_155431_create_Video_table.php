<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Video', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->integer('soluotxem');
            $table->integer('soluotthich');
            $table->integer('id_monan')->unsigned();
            $table->timestamps();
            $table->foreign('id_monan')->references('id')->on('MonAn')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Video');
    }
}
