<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['name','status','animal_category_id'];

    public function animalCategory(){
        return $this->belongsTo('App\AnimalCategory');
    }
}
