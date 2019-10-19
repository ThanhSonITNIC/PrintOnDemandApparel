<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateProductsTable.
 */
class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('images')->nullable();
			$table->decimal('price', 18, 3);
			$table->integer('quantity')->default(0);
			$table->text('description')->nullable();
			$table->string('colors')->nullable();
			$table->string('sizes')->nullable();
			$table->unsignedInteger('id_type');
			$table->string('tags')->nullable();
			$table->boolean('highlight')->default(false);
			$table->timestamps();
			
			$table->foreign('id_type')->references('id')->on('product_types')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}
}
