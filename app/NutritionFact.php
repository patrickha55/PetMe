<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NutritionFact extends Model
{
    protected $fillable = [
        'serving_size', 'calories', 'protein','fat_content','total_carbonhydrate','sugar','crude_ash','crude_fiber','calcium','vitamin_A','moisture'];
}
