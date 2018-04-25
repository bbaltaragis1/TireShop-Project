<?php

namespace App;
use App\Invoice;


class Customer extends Model
{
    protected $primaryKey = 'customerID';

    public function invoices()
    {
        return $this->hasMany('App\Invoice', 'customerID');
    }
}
