<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateOrderLogsTable.
 */
class CreateOrderLogsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_logs', function(Blueprint $table) {
            $table->increments('id');
			$table->string('content');
			$table->unsignedInteger('id_order');
			$table->unsignedInteger('id_user');
			$table->timestamps();
			
			$table->foreign('id_order')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
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
		Schema::drop('order_logs');
	}
}
