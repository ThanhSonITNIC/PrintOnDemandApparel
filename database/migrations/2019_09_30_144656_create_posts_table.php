<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePostsTable.
 */
class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('id_author');
			$table->string('title');
			$table->text('description')->nullable();
			$table->text('content')->nullable();
			$table->string('image')->nullable();
			$table->integer('status')->default(1);
			$table->boolean('highlight')->default(false);
			$table->unsignedInteger('id_type');
			$table->string('tags')->nullable();
			$table->timestamps();
			
			$table->foreign('id_author')->references('id')->on('users')->onUpdate('cascade');
			$table->foreign('id_type')->references('id')->on('post_types')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}
}
