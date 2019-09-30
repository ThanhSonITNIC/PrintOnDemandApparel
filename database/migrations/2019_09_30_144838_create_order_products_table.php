<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateOrderProductsTable.
 */
class CreateOrderProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_products', function(Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('id_order');
			$table->unsignedInteger('id_product');
			$table->decimal('price', 18, 3);
			$table->integer('quantity')->default(1);
			$table->string('color')->nullable();
			$table->string('size')->nullable();
			$table->string('image')->nullable();
			$table->string('note')->nullable();
			$table->timestamps();
			
			$table->foreign('id_order')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('id_product')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_products');
	}
}
