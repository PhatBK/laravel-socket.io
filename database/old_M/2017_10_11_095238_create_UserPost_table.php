<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPostTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('UserPost', function (Blueprint $table) {
			$table->increments('id');
			$table->string('tieude');
			$table->string('noidung');
			$table->integer('soluotxem');
			$table->integer('soluotthich');
			$table->integer('soluong_comment');
			$table->integer('id_loaimon')->unsigned();
			$table->integer('id_user')->unsigned();
			$table->timestamps();
			$table->foreign('id_loaimon')->references('id')->on('LoaiMon')->onDelete('cascade');
			$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('UserPost');
	}
}
