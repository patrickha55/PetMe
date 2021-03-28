<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
      'pro_cat_id', 'supplier_id', 'name', 'description', 'price','stock' ,'img'
    ];

    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Supplier');
    }
}
