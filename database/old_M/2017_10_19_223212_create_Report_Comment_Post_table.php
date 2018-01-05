<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCommentPostTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('Report_Comment_Post', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_CommentPost')->unsigned();
			$table->integer('id_user')->unsigned();
			$table->text('noidung');
			$table->foreign('id_CommentPost')->references('id')->on('CommentPost')->onDelete('cascade');
			$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('Report_Comment_Post');
	}
}
