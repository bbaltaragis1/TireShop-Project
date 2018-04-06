<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invoices')->delete();
        
        \DB::table('invoices')->insert(array (
            0 => 
            array (
                'invoiceID' => 1,
                'employeeID' => 1,
                'customerID' => 1,
                'orderID' => 1,
                'invoiceDate' => '2012-02-10',
            ),
            1 => 
            array (
                'invoiceID' => 2,
                'employeeID' => 2,
                'customerID' => 2,
                'orderID' => 2,
                'invoiceDate' => '2012-02-11',
            ),
            2 => 
            array (
                'invoiceID' => 3,
                'employeeID' => 3,
                'customerID' => 3,
                'orderID' => 3,
                'invoiceDate' => '2012-02-12',
            ),
            3 => 
            array (
                'invoiceID' => 4,
                'employeeID' => 4,
                'customerID' => 4,
                'orderID' => 4,
                'invoiceDate' => '2012-02-13',
            ),
            4 => 
            array (
                'invoiceID' => 5,
                'employeeID' => 5,
                'customerID' => 5,
                'orderID' => 5,
                'invoiceDate' => '2012-02-14',
            ),
            5 => 
            array (
                'invoiceID' => 6,
                'employeeID' => 6,
                'customerID' => 6,
                'orderID' => 6,
                'invoiceDate' => '2012-02-15',
            ),
            6 => 
            array (
                'invoiceID' => 7,
                'employeeID' => 7,
                'customerID' => 7,
                'orderID' => 7,
                'invoiceDate' => '2012-02-16',
            ),
            7 => 
            array (
                'invoiceID' => 8,
                'employeeID' => 8,
                'customerID' => 8,
                'orderID' => 8,
                'invoiceDate' => '2012-02-17',
            ),
            8 => 
            array (
                'invoiceID' => 9,
                'employeeID' => 9,
                'customerID' => 9,
                'orderID' => 9,
                'invoiceDate' => '2012-02-18',
            ),
            9 => 
            array (
                'invoiceID' => 10,
                'employeeID' => 10,
                'customerID' => 10,
                'orderID' => 10,
                'invoiceDate' => '2012-02-19',
            ),
        ));
        
        
    }
}