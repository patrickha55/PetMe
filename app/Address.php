<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    protected $fillable = [
        'user_id','address', 'ward', 'district','city'
        ];

        use SoftDeletes;

        public function users(): BelongsToMany
        {
            return $this->belongsToMany('App\User');
        }
}
