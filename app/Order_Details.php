<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    protected $table = 'order_details';

    public function product()
    {
        return $this->belongsTo(Product::class);

    }
    
}
