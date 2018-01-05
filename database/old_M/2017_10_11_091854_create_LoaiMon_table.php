<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiMonTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('LoaiMon', function (Blueprint $table) {
			$table->increments('id');
			$table->string('ten');
			$table->string('tenkhongdau');
			$table->integer('id_theloai')->unsigned();
			$table->foreign('id_theloai')->references('id')->on('TheLoai')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('LoaiMon');
	}
}
