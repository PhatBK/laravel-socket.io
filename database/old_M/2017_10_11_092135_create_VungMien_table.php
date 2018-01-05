<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVungMienTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('VungMien', function (Blueprint $table) {
			$table->increments('id');
			$table->string('ten');
			$table->string('tenkhongdau');
			$table->string('vichi');
			$table->text('gioithieu');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('VungMien');
	}
}
