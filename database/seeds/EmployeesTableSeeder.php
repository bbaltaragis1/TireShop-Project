<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'employeeID' => 1,
                'firstName' => 'John',
                'lastName' => 'Doe',
                'startDate' => '2012-02-04',
                'status' => 'Working',
            ),
            1 => 
            array (
                'employeeID' => 2,
                'firstName' => 'Jake',
                'lastName' => 'Wills',
                'startDate' => '2012-02-05',
                'status' => 'Working',
            ),
            2 => 
            array (
                'employeeID' => 3,
                'firstName' => 'Jill',
                'lastName' => 'Doe',
                'startDate' => '2012-02-06',
                'status' => 'Working',
            ),
            3 => 
            array (
                'employeeID' => 4,
                'firstName' => 'Gabe',
                'lastName' => 'Wills',
                'startDate' => '2012-02-07',
                'status' => 'Working',
            ),
            4 => 
            array (
                'employeeID' => 5,
                'firstName' => 'Albert',
                'lastName' => 'Doe',
                'startDate' => '2012-02-08',
                'status' => 'Working',
            ),
            5 => 
            array (
                'employeeID' => 6,
                'firstName' => 'Bob',
                'lastName' => 'Wills',
                'startDate' => '2012-02-09',
                'status' => 'Working',
            ),
            6 => 
            array (
                'employeeID' => 7,
                'firstName' => 'Blake',
                'lastName' => 'Doe',
                'startDate' => '2012-02-10',
                'status' => 'Working',
            ),
            7 => 
            array (
                'employeeID' => 8,
                'firstName' => 'George',
                'lastName' => 'Wills',
                'startDate' => '2012-02-11',
                'status' => 'Working',
            ),
            8 => 
            array (
                'employeeID' => 9,
                'firstName' => 'Nick',
                'lastName' => 'Doe',
                'startDate' => '2012-02-12',
                'status' => 'Working',
            ),
            9 => 
            array (
                'employeeID' => 10,
                'firstName' => 'Noah',
                'lastName' => 'Wills',
                'startDate' => '2012-02-13',
                'status' => 'Working',
            ),
        ));
        
        
    }
}