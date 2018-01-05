<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaHangLienKetTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('NhaHangLienKet', function (Blueprint $table) {
			$table->increments('id_monan')->unsigned();
			$table->increments('id_nhahang')->unsigned();
			$table->foreign('id_monan')->references('id')->on('MonAn')->onDelete('cascade');
			$table->foreign('id_nhahang')->references('id')->on('NhaHang')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('NhaHangLienKet');
	}
}
