<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductReview extends Model
{   
    use SoftDeletes;

    protected $fillable = ['user_id','product_id','title','rating','status','content'];

    public function product(): BelongsTo
    {
        return $this->belongsTo('App\Product');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The user comment that belong to the ProductReview
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userComments(): BelongsToMany
    {
        return $this->belongsToMany(App\User, 'comments')
        ->withTimeStamps()
        ->withPivot('body');
    }
}
