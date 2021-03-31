<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\MorphTo;

class ProductReview extends Model
{
    protected $fillable = ['reviewable_id','reviewable_type','title','rating','published','content'];
}
