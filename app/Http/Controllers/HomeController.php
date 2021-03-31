<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\AnimalCategory;
use App\ProductCategory;
use \Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     *
     */

    public function index(): Renderable
    {
        $products = Product::all();

         $trend = $products->shuffle()->take(3);
         $categories = AnimalCategory::all();
         $subCat = ProductCategory::all();

        return view('user.home')->with(['products'=>$products,'categories'=>$categories,'subCat'=>$subCat,'trend'=>$trend]);
    }

    public function show(Product $product){
        return view('product.show',compact('product',$product));
    }


}
