<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
      'pro_cat_id',    'name', 'description', 'price','stock' ,'img'
];

}
