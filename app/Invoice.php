<?php

namespace App;
use App\Order;
use App\Customer;
use App\Employee;
use App\Tire;

class Invoice extends Model
{
    protected $primaryKey = 'invoiceID';

    public function customer()
    {
        return $this->belongsTo('Customer', 'customerID');
    }

    public function employee()
    {
        return $this->belongsTo('Employee', 'employeeID');
    }

    public function orders()
    {
        return $this->hasMany('Order', 'orderID');
    }

    public function tires()
    {
        return $this->hasManyThrough('Tire', 'Order', 'orderID', 'tireID');
    }
}
