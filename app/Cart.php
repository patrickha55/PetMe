<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id','note','guest_name','guest_name','email','phone','address','ward','district','city'];

    public function details(): BelongsToMany
    {
        return $this->belongsToMany('App\CartDetail', 'cart_details')
            ->withTimestamps()
            ->withPivot('quantity');
    }
}
