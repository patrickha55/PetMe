<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
     protected $fillable = [
<<<<<<< HEAD
      'product_category_id', 'supplier_id', 'name', 'description', 'price','stock' ,'img','id',
=======
      'product_category_id', 'supplier_id', 'name', 'description', 'price','stock' ,'img'
>>>>>>> main
    ];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo('App\Supplier');
    }

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo('App\ProductCategory');
    }

    public function detail(): HasOne
    {
        return $this->hasOne('App\ProductDetail');
    }
}
