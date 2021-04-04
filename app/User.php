<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use \Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'userName', 'dob', 'gender', 'email', 'password', 'phoneNumber', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews(): BelongsToMany
    {
        return $this->belongsToMany('App\Product', 'product_reviews');
    }

    public function address(): HasOne
    {
        return $this->hasOne('App\Address');
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany('App\Product', 'favorites');
    }
}
