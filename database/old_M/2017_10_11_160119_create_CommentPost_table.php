<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CommentPost', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_UserPost')->unsigned();
            $table->string('noidung');
            $table->integer('id_user')->unsigned();
            $table->timestamps();
            $table->foreign('id_UserPost')->references('id')->on('UserPost')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CommentPost');
    }
}
