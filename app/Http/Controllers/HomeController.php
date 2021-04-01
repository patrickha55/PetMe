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
        $products = Product::take(30)->get();

         $trend = $products->shuffle()->take(3);
         $categories = AnimalCategory::all();
         $subCat = ProductCategory::all();

        return view('user.home')->with(['products'=>$products,'categories'=>$categories,'subCat'=>$subCat,'trend'=>$trend]);
    }

    public function show(Product $product){
        $products = Product::all();
        $trend = $products->shuffle()->take(3);
        $categories = AnimalCategory::all();
        $subCats = ProductCategory::all();

        $userReviews = $product->userReviews()->paginate(3);

        $countFive = $countFour = $countThree = $countTwo = $count= 0;
        $one = $two = $three = $four = $five = 0;
        foreach ($product->userReviews as $review){
            switch($review->pivot->rating){
                case 5:
                    $countFive++;
                    break;
                case 4:
                    $countFour++;
                    break;
                case 3:
                    $countThree++;
                    break;
                case 2:
                    $countTwo++;
                    break;
                default:
                    $count++;
                    break;
            }
        }

        if ($countFive != 0){
            $five = 100 / $countFive ;
        }

        if ($countFour != 0){
            $four = 100 / $countFour;
        }

        if ($countThree != 0){
            $three = 100 / $countThree;
        }

        if ($countTwo != 0){
            $two = 100 / $countTwo;
        }

        if ($count != 0){
            $one = 100 / $count;
        }

        return view('product.show',compact('product',$product))->with([
            'products'=>$products,
            'categories'=>$categories,
            'subCats'=>$subCats,
            'trend'=>$trend,
            'five' => $five,
            'four' => $four,
            'three' => $three,
            'two' => $two,
            'one' => $one,
            'userReviews' => $userReviews
        ]);
    }


}
