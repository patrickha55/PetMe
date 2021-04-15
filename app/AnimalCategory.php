<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnimalCategory extends Model
{
    use SoftDeletes;

    protected $fillable = ['id','name','status'];

    /**
     * Animal category có nhiều danh mục khác nhau (đồ ăn, đồ chơi, ...)
     * @return HasMany
     */
    public function productCategories(): HasMany
    {
        return $this->hasMany('App\ProductCategory');
    }

    public function products(): HasManyThrough
    {
        return $this->hasManyThrough('App\Product', 'App\ProductCategory');
    }

    /* Get animal id */
    public static function getAnimalID($animal){
        $animalID = '';
        switch (strtolower($animal)){

            case 'Dog':
                $animalID = 1;
                break;
            case 'Cat':
                $animalID = 2;
                break;
        }
        return $animalID;
    }
}
