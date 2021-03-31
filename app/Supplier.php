<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'email', 'phone_1','phone_2', 'website' ,'address','ward','district','city','id'
        ];

    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Product');
    }
}
