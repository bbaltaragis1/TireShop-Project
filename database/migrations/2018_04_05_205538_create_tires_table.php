<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tires', function(Blueprint $table)
		{
			$table->integer('tireID', true);
			$table->string('name', 200)->nullable();
			$table->decimal('price', 10)->nullable();
			$table->decimal('rating', 2, 1)->nullable();
			$table->string('brand', 50)->nullable();
			$table->integer('rimDiameter')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tires');
	}

}
