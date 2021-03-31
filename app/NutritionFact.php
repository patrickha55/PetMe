<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class NutritionFact extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'serving_size',
        'calories',
        'protein',
        'fat_content',
        'total_carbohydrate',
        'sugar','crude_ash',
        'crude_fiber',
        'calcium',
        'vitamin_A',
        'moisture',
        'product_detail_id',
    ];

    public function detail(): BelongsTo
    {
        return $this->belongsTo('App\ProductDetail');
    }
}
