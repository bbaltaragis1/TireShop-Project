<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices', function(Blueprint $table)
		{
			$table->integer('invoiceID', true);
			$table->integer('employeeID')->index('fk_invoices_to_employees');
			$table->integer('customerID')->index('fk_invoices_to_customers');
			$table->integer('orderID')->index('fk_orders');
			$table->date('invoiceDate')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::drop('invoices');
	}

}
