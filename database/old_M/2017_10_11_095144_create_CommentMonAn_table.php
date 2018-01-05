<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentMonAnTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('CommentMonAn', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('so_luot_xem');
			$table->string('noi_dung');
			$table->timestamps();
			$table->integer('id_user')->unsigned();
			$table->integer('id_monan')->unsigned();
			$table->foreign('id_monan')->references('id')->on('MonAn');
			$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('CommentMonAn');
	}
}
