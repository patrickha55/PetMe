<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'origin', 'ingredients', 'materials','color', 'size' ,'instruction','note', 'product_id',
        ];

    public function product(): BelongsTo
    {
        return $this->belongsTo('App\Product');
    }

    public function nutritionFact(): HasOne
    {
        return $this->hasOne('App\NutritionFact');
    }
}
