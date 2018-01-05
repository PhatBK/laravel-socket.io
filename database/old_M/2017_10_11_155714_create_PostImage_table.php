<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostImageTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('PostImage', function (Blueprint $table) {
			$table->increments('id');
			$table->string('image');
			$table->integer('id_post')->unsigned();
			$table->timestamps();
			$table->foreign('id_post')->references('id')->on('UserPost')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('PostImage');
	}
}
