<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'origin', 'ingredients', 'materials','color', 'size' ,'instruction','note', 'product_id',
        ];
}
