<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['user_id', 'total_price', 'status', 'name', 'phone','email','address','ward', 'district','city'];
}
