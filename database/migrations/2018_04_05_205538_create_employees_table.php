<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->integer('employeeID', true);
			$table->string('firstName', 50)->nullable();
			$table->string('lastName', 50)->nullable();
			$table->date('startDate')->nullable();
			$table->enum('status', ['Working', 'Fired', 'On Leave']);
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
