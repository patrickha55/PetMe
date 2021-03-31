<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    protected $fillable = ['name','status','animal_category_id','id'];

    public function animalCategory(){
        return $this->belongsTo('App\AnimalCategory');
    }

    public function products(): HasManyw
    {
        return $this->hasMany('App\Product');
    }
}
