<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id','note', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function details(): BelongsToMany
    {
        return $this->belongsToMany('App\CartDetail', 'cart_details')
            ->withTimestamps()
            ->withPivot('quantity');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany('App\Product', 'cart_details')
            ->withTimestamps()
            ->withPivot(['']);
    }
}
