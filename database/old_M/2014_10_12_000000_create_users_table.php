<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('hovaten');
			$table->boolean('gioitinh');
			$table->integer('tuoi');
			$table->string('congviec');
			$table->string('email')->unique();
			$table->string('tentaikhoan');
			$table->string('password');
			$table->integer('level');
			$table->integer('noibat');
			$table->string('anhdaidien');
			$table->integer('id_facebook');
			$table->integer('id_google');
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
		Schema::dropIfExists('users');
	}
}
