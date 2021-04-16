<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    // use SoftDeletes;

    protected $fillable = ['product_id', 'user_id'];


}
