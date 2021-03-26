<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address', 'ward', 'district','city'
        ];
        public function user(){
            return $this->belongsToMany('App\User');
        }
}
