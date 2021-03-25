<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','products','total_price','status','name','phone','email','address','ward','district','city'];
}
