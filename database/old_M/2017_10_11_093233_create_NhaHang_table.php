<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaHangTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('NhaHang', function (Blueprint $table) {
			$table->increments('id');
			$table->string('ten');
			$table->string('taikhoan')->unique();
			$table->string('password')->unique();
			$table->string('tenkhongdau');
			$table->integer('luotxem');
			$table->integer('danhgia');
			$table->string('lienhe');
			$table->string('vichi');
			$table->text('gioithieu');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('NhaHang');
	}
}
