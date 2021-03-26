<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductNutrition extends Model
{
    protected $fillable = ['product_details_id','nutrition_facts_id'];
}
