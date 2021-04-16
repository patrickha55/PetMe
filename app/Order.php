<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $fillable = ['user_id','total_price','status','name','phone','email','address','ward','district','city'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function productDetails(): BelongsToMany
    {
        return $this->belongsToMany('App\Product', 'order_details')
        ->withTimestamps()
        ->withPivot([
            'price', 'quantity'
        ]);
    }
}
