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
        return $this->belongsTo('App\Customer', 'customerID');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employeeID');
    }

       public function order()
    {
        return $this->orders()
            ->take(1)
            ->first();
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'orderID');
    }

    public function tires()
    {
        return $this->hasManyThrough('App\Tire', 'App\Order', 'orderID', 'tireID');
    }

    public function tire()
    {
        return $this->tires()
            ->take(1)
            ->first();
    }
}
