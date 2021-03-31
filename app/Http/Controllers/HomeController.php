<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
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
        $products = Product::take(30)->get();

        // $categories = Category::whereNull('parent_id')->get();


        return view('user.home', ['allProducts' => $products]);
    }

    public function show(Product $product){
        return view('user.product.show')->with('product', $product);
    }
}
