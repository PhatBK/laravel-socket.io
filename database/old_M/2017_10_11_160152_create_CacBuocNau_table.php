<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCacBuocNauTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('CacBuocNau', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_monan')->unsigned();
			$table->longText('noidung');
			$table->timestamps();
			$table->foreign('id_monan')->references('id')->on('MonAn')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('CacBuocNau');
	}
}
