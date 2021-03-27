<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'email', 'phone1','phone2', 'website' ,'address','ward','district','city'
        ];

    public function productSupplier(){
        $this->hasMany();
    }
}
