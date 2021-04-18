<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['order_id','payment_method','status','content'];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
