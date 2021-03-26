<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','note','guest_name','guest_name','email','phone','address','ward','district','city'];
}
