<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'customerID' => 1,
                'firstName' => 'Dylan',
                'lastName' => 'Doe',
                'phoneNumber' => '212-555-2222',
                'email' => 'test1@test.com',
            ),
            1 => 
            array (
                'customerID' => 2,
                'firstName' => 'Jake',
                'lastName' => 'Doe',
                'phoneNumber' => '212-555-3333',
                'email' => 'test2@test.com',
            ),
            2 => 
            array (
                'customerID' => 3,
                'firstName' => 'Jill',
                'lastName' => 'Doe',
                'phoneNumber' => '212-555-4444',
                'email' => 'test3@test.com',
            ),
            3 => 
            array (
                'customerID' => 4,
                'firstName' => 'Gabe',
                'lastName' => 'Doe',
                'phoneNumber' => '212-555-5555',
                'email' => 'test4@test.com',
            ),
            4 => 
            array (
                'customerID' => 5,
                'firstName' => 'Albert',
                'lastName' => 'Doe',
                'phoneNumber' => '212-555-6666',
                'email' => 'test5@test.com',
            ),
            5 => 
            array (
                'customerID' => 6,
                'firstName' => 'Bob',
                'lastName' => 'Doe',
                'phoneNumber' => '212-555-7777',
                'email' => 'test6@test.com',
            ),
            6 => 
            array (
                'customerID' => 7,
                'firstName' => 'George',
                'lastName' => 'Doe',
                'phoneNumber' => '213-555-2222',
                'email' => 'test7@test.com',
            ),
            7 => 
            array (
                'customerID' => 8,
                'firstName' => 'Nick',
                'lastName' => 'Doe',
                'phoneNumber' => '214-555-2222',
                'email' => 'test8@test.com',
            ),
            8 => 
            array (
                'customerID' => 9,
                'firstName' => 'Noah',
                'lastName' => 'Doe',
                'phoneNumber' => '215-555-2222',
                'email' => 'test9@test.com',
            ),
            9 => 
            array (
                'customerID' => 10,
                'firstName' => 'John',
                'lastName' => 'Doe',
                'phoneNumber' => '216-555-2222',
                'email' => 'test10@test.com',
            ),
        ));
        
        
    }
}