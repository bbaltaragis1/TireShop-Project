<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'orderID' => 1,
                'tireID' => 1,
                'orderDate' => '2012-02-11',
                'quantity' => 1,
                'laborCost' => 0.0,
            ),
            1 => 
            array (
                'orderID' => 2,
                'tireID' => 1,
                'orderDate' => '2012-02-12',
                'quantity' => 2,
                'laborCost' => 0.0,
            ),
            2 => 
            array (
                'orderID' => 3,
                'tireID' => 1,
                'orderDate' => '2012-02-13',
                'quantity' => 3,
                'laborCost' => 0.0,
            ),
            3 => 
            array (
                'orderID' => 4,
                'tireID' => 1,
                'orderDate' => '2012-02-14',
                'quantity' => 1,
                'laborCost' => 0.0,
            ),
            4 => 
            array (
                'orderID' => 5,
                'tireID' => 1,
                'orderDate' => '2012-02-15',
                'quantity' => 2,
                'laborCost' => 0.0,
            ),
            5 => 
            array (
                'orderID' => 6,
                'tireID' => 1,
                'orderDate' => '2012-02-16',
                'quantity' => 3,
                'laborCost' => 0.0,
            ),
            6 => 
            array (
                'orderID' => 7,
                'tireID' => 1,
                'orderDate' => '2012-02-17',
                'quantity' => 4,
                'laborCost' => 0.0,
            ),
            7 => 
            array (
                'orderID' => 8,
                'tireID' => 1,
                'orderDate' => '2012-02-18',
                'quantity' => 2,
                'laborCost' => 0.0,
            ),
            8 => 
            array (
                'orderID' => 9,
                'tireID' => 1,
                'orderDate' => '2012-02-19',
                'quantity' => 3,
                'laborCost' => 0.0,
            ),
            9 => 
            array (
                'orderID' => 10,
                'tireID' => 1,
                'orderDate' => '2012-02-20',
                'quantity' => 4,
                'laborCost' => 0.0,
            ),
        ));
        
        
    }
}