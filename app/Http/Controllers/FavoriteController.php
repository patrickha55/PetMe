<?php

namespace App\Http\Controllers;

use App\AnimalCategory;
use App\Favorite;
use App\Product;
use App\ProductCategory;
use App\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function index()
    {
//        dd ($product->has('userFavorites')->get());
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


    public function destroy(Favorite $favorite)
    {
        $favorite->delete();

        return redirect()->back()->with('status', 'Product removed from your wishlist!');
    }
}
