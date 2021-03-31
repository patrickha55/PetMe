<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\MorphTo;

class ProductReview extends Model
{
    protected $fillable = ['user_id','product_id','title','rating','published','content'];
}
