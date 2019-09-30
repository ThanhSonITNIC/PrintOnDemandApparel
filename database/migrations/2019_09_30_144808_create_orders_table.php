<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateOrdersTable.
 */
class CreateOrdersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('id_status')->default(1);
			$table->decimal('total', 18, 3)->default(0);
			$table->decimal('paid', 18, 3)->default(0);
			$table->timestamps();
			
			$table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');
			$table->foreign('id_status')->references('id')->on('order_statuses')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}
}
