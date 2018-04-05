<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('invoices', function(Blueprint $table)
		{
			$table->foreign('customerID', 'fk_invoices_to_customers')->references('customerID')->on('customers')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('employeeID', 'fk_invoices_to_employees')->references('employeeID')->on('employees')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('orderID', 'fk_orders')->references('orderID')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('invoices', function(Blueprint $table)
		{
			$table->dropForeign('fk_invoices_to_customers');
			$table->dropForeign('fk_invoices_to_employees');
			$table->dropForeign('fk_orders');
		});
	}

}
