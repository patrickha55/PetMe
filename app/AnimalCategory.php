<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class AnimalCategory extends Model
{
    protected $fillable = ['name','status'];


    /**
     * Animal category có nhiều danh mục khác nhau (đồ ăn, đồ chơi, ...)
     * @return HasMany
     */
    public function productCategories(): HasMany
    {
        return $this->hasMany('App\ProductCategory');
    }
}

