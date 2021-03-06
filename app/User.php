<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use \Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;


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
        'firstName', 'lastName', 'userName', 'dob', 'gender', 'email', 'password', 'phoneNumber', 'active', 'img',
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

    /**
     * The orders that belong to this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany('App\Order');
    }

    /**
     * The review that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reviews(): BelongsToMany
    {
        return $this->belongsToMany('App\Product', 'product_reviews');
    }

    /**
     * The address that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function address(): HasOne
    {
        return $this->hasOne('App\Address');
    }

    /**
     * The wishlist product that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany('App\Product', 'favorites')
            ->withTimestamps();
    }

    /**
     * The comment that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(App\ProductReview, 'comments');
    }

    /*
     * Upload img cho user profile
    */

    public static function uploadImg(Request $request){
        //Lay ten file voi kieu du lieu
        $fileNameWithExt = $request->file('img')->getClientOriginalName();
        // Lay ten file
        $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
        // Lay kieu du lieu
        $extension = $request->file('img')->getClientOriginalExtension();
        // File de luu
        // Lay chu dau tien trong cau
        $user = auth()->user()->userName;

        $fileNameToStore = $user . '/' . $fileName . '_' . time() . '.' . $extension;
        // Upload image
        return $fileNameToStore;
    }
}
