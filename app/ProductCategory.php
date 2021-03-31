<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    protected $fillable = ['name','status','animal_category_id','id'];

    public function animalCategory(): BelongsTo
    {
        return $this->belongsTo('App\AnimalCategory');
    }

    public function products(): HasMany
    {
        return $this->hasMany('App\Product');
    }

    public static function getProductCategoryID($category)
    {
        $categoryID = '';
        switch (strtolower($category)){
            case 'dry cat food':
                $categoryID = 1;
                break;
            case 'wet cat food':
                $categoryID = 2;
                break;
        }
        return $categoryID;
    }
}
