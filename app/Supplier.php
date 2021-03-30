<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'email', 'phone1','phone2', 'website' ,'address','ward','district','city'
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

    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Product');
    }
}
