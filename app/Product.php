<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use SoftDeletes;

     protected $fillable = [
      'product_category_id', 'supplier_id', 'name', 'description', 'price','stock' ,'img'
    ];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo('App\Supplier');
    }

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo('App\ProductCategory');
    }

    public function detail(): HasOne
    {
        return $this->hasOne('App\ProductDetail');
    }

    public function cartDetails(): BelongsToMany
    {
        return $this->belongsToMany('App\Cart', 'cart_details')
            ->withTimestamps()
            ->withPivot('quantity');
    }

    public function userReviews(): BelongsToMany
    {
        return $this->belongsToMany('App\User',
            'product_reviews'
        )->withTimestamps()->as('pivot')->withPivot('title', 'rating', 'content', 'id');
    }

    public function userFavorites(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'favorites')
            ->withTimestamps();
    }

    public function usersDetail(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'order_details')
        ->withTimestamps()
        ->withPivot(['price', 'quantity']);
    }

    public function isProductInUserWishlist(){
        return $this->userFavorites()->where('user_id', auth()->id())->exists();
    }

    /*
     * Upload img cho form tao product
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
        $category = explode(' ', trim(strtolower(\App\ProductCategory::find($request->category_id)->name)));

        $fileNameToStore = strtolower(\App\AnimalCategory::find($request->animal_id)->name) . '/' . $category[0] . '/' . $fileName . '_' . time() . '.' . $extension;
        // Upload image
        return $fileNameToStore;
    }
}
