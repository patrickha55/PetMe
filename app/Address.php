<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Address extends Model
{
    protected $fillable = [
        'user_id','address', 'ward', 'district','city'
        ];

        public function users(): BelongsToMany
        {
            return $this->belongsToMany('App\User');
        }
}
