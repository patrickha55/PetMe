<?php

namespace App\Http\Controllers;

use App\AnimalCategory;
use App\Favorite;
use App\Product;
use App\ProductCategory;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $categories = AnimalCategory::all();
        $subCat = ProductCategory::all();
        return view('user.wishlist.index')
            ->with([
                'user' => $user,
                'categories' => $categories,
                'subCat' => $subCat,
            ]);
    }

    public function create()
    {
        //
    }

    public function store(Product $product)
    {
        Favorite::create([
           'product_id' => $product->id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }


    public function delete($product_id, $user_id): \Illuminate\Http\RedirectResponse
    {
        Favorite::delete()->where('product_id', $product_id)->where('user_id', $user_id);

        return redirect()->back()->with('status', 'Product removed from your wishlist!');
    }

    public function destroy(Favorite $favorite)
    {
        $favorite->delete();

        return redirect()->back()->with('status', 'Product removed from your wishlist!');
    }
}
