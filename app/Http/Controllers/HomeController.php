<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\AnimalCategory;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $products = Product::all();

         $trend = $products->shuffle()->take(3);
         $categories = AnimalCategory::all();
         $subCat = ProductCategory::all();


        return view('user.home')->with(['allProducts'=>$products,'categories'=>$categories,'subCat'=>$subCat,'trend'=>$trend]);
    }
    public function show($id){
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }

    public function show(Product $product){
        return view('user.product.show')->with('product', $product);
    }
}
