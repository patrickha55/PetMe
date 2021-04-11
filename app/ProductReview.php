<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\MorphTo;

class ProductReview extends Model
{
    protected $fillable = ['user_id','product_id','title','rating','status','content'];

    public function product(): BelongsTo
    {
        return $this->belongsTo('App\Product');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
