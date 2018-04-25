<?php

namespace App;
use App\Invoice;
use App\Tire;

use Illuminate\Database\Eloquent\Relations\Pivot;
class Order extends Model
{

	protected $primaryKey = 'orderID';

	public function invoice()
    {
        return $this->belongsTo('App\Invoice', 'orderID');
    }

    public function tire()
    {
    	return $this->belongsTo('App\Tire', 'tireID');
    }
    
}
