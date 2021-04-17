<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CartDetail extends Model
{
    use SoftDeletes;

    protected $fillable = ['cart_id','product_id', 'price','quantity', 'status'];
}
