<?php

namespace App;
use App\Invoice;

class Employee extends Model
{
    protected $primaryKey = 'employeeID';

     public function invoices()
    {
        return $this->hasMany('App\Invoice', 'employeeID');
    }
	
}
