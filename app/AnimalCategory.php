<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class AnimalCategory extends Model
{
    protected $fillable = ['id','name','status'];


    /**
     * Animal category có nhiều danh mục khác nhau (đồ ăn, đồ chơi, ...)
     * @return HasMany
     */
    public function productCategories(): HasMany
    {
        return $this->hasMany('App\ProductCategory');
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
