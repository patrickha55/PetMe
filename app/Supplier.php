<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'phone_1','phone_2', 'website' ,'address','ward','district','city','id'
        ];

    public static function getSupplierID($supplier)
    {
        $supplierID = '';
        switch (strtolower($supplier)){

            case 'whiskas®':
                $supplierID = 1;
                break;
            case 'hill’s science diet':
                $supplierID = 2;
                break;
        }
        return $supplierID;
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Product');
    }
}
