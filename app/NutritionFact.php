<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NutritionFact extends Model
{
    protected $fillable = [
        'product_details_id','serving_size', 'calories', 'protein','fat_content','total_carbohydrate','sugar','crude_ash','crude_fiber','calcium','vitamin_A','moisture'];
}
