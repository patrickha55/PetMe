<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
          'name', 'description', 'price','stock', 'total_price' ,'status','imglink'
          ];
}
