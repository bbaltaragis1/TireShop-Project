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
                'password' => '42f749ade7f9e195bf475f37a44cafcb',
                'isAdmin' => 1,
            ),
            1 => 
            array (
                'employeeID' => 2,
                'firstName' => 'Jake',
                'lastName' => 'Wills',
                'startDate' => '2012-02-05',
                'password' => '68eacb97d86f0c4621fa2b0e17cabd8c',
                'isAdmin' => 0,
            ),
            2 => 
            array (
                'employeeID' => 3,
                'firstName' => 'Jill',
                'lastName' => 'Doe',
                'startDate' => '2012-02-06',
                'password' => NULL,
                'isAdmin' => 1,
            ),
            3 => 
            array (
                'employeeID' => 4,
                'firstName' => 'Gabe',
                'lastName' => 'Wills',
                'startDate' => '2012-02-07',
                'password' => NULL,
                'isAdmin' => 0,
            ),
            4 => 
            array (
                'employeeID' => 5,
                'firstName' => 'Albert',
                'lastName' => 'Doe',
                'startDate' => '2012-02-08',
                'password' => NULL,
                'isAdmin' => 1,
            ),
            5 => 
            array (
                'employeeID' => 6,
                'firstName' => 'Bob',
                'lastName' => 'Wills',
                'startDate' => '2012-02-09',
                'password' => NULL,
                'isAdmin' => 0,
            ),
            6 => 
            array (
                'employeeID' => 7,
                'firstName' => 'Blake',
                'lastName' => 'Doe',
                'startDate' => '2012-02-10',
                'password' => NULL,
                'isAdmin' => 1,
            ),
            7 => 
            array (
                'employeeID' => 8,
                'firstName' => 'George',
                'lastName' => 'Wills',
                'startDate' => '2012-02-11',
                'password' => NULL,
                'isAdmin' => 0,
            ),
            8 => 
            array (
                'employeeID' => 9,
                'firstName' => 'Nick',
                'lastName' => 'Doe',
                'startDate' => '2012-02-12',
                'password' => NULL,
                'isAdmin' => 1,
            ),
            9 => 
            array (
                'employeeID' => 10,
                'firstName' => 'Noah',
                'lastName' => 'Wills',
                'startDate' => '2012-02-13',
                'password' => NULL,
                'isAdmin' => 0,
            ),
        ));
        
        
    }
}