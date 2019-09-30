<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCartsTable.
 */
class CreateCartsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carts', function(Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('id_product');
			$table->unsignedInteger('id_user');
			$table->integer('quantity')->default(1);
			$table->string('color')->nullable();
			$table->string('size')->nullable();
			$table->string('image')->nullable();
			$table->string('note')->nullable();

			$table->foreign('id_product')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carts');
	}
}
