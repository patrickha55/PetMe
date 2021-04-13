<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\AnimalCategory;
use App\ProductCategory;
use App\ProductReview;
use \Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(): Renderable
    {
        $totalRate = $productWithHighRating = collect([]);

        $products = Product::paginate(20);

        $productsForRating = Product::has('userReviews')->get();

        foreach ($productsForRating as $product){
            $rating = $count = 0;
            foreach ($product->userReviews as $review ){
                $rating += ($review->pivot->rating);
                $count++;
            }
            $totalRate->put('product' ,[$product->id, $rating/$count]);
            if ($rating/$count > 4){
                $productWithHighRating->put($product->id, $rating/$count);
            }
        }

        $categories = AnimalCategory::all();
        $subCat = ProductCategory::all();

        return view('product.index')->with([
            'products' => $products,
            'categories' => $categories,
            'subCat' => $subCat,
            'totalRate' => $totalRate
        ]);
    }

    public function home(){
        $totalRate = $productWithHighRating = collect([
            ['id' => '', 'avg' => '']
        ]);

        $products = Product::paginate(5);
        $productsForRating = Product::has('userReviews')->get();
        foreach ($productsForRating as $product){
            $rating = $count = 0;
            foreach ($product->userReviews as $review ){
                $rating += ($review->pivot->rating);
                $count++;
            }
            $totalRate->put($product->id, $rating/$count);
            if ($rating/$count > 4){
                $productWithHighRating->put($product->id, $rating/$count);
            }
        }

        $topProducts = Product::whereHas('userReviews', function(Builder $query){
            $query->where('rating', '>', '3');
        })->paginate(5);

        $trend = $products->sortByDesc('created_at')->take(3);

        $categories = AnimalCategory::all();
        $subCat = ProductCategory::all();

        return view('product.home')->with([
            'products'=>$products,
            'categories'=>$categories,
            'subCat'=>$subCat,
            'trend'=>$trend,
            'topProducts' => $topProducts,
        ]);
    }

    // Hien trang product detail

    public function show(Product $product){
        $products = Product::all();
        $trend = $products->shuffle()->take(3);
        $categories = AnimalCategory::all();
        $subCats = ProductCategory::all();

        //Lay thong tin user da review san pham o parameter phia tren

        $userReviews = $product->userReviews()->where('status', 'approved')->orderByDesc('created_at')->paginate(3);
        
        /* foreach($userReviews as $review){
            $comments = \App\Comment::where('product_review_id', 4)->get();
        dd($comments); 
        } */
               



        // dd($userReviews);

        $countFive = $countFour = $countThree = $countTwo = $count= 0;
        $one = $two = $three = $four = $five = 0;
        foreach ($userReviews as $review){
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

    public function showFilterAnimalProducts(AnimalCategory $animal_category){
        $products = Product::all();
        $filteredProducts = $animal_category->products()->get();

        $categories = AnimalCategory::all();
        $subCat = ProductCategory::all();

        return view('product.showFilterAnimalProducts')->with([
            'products'=>$products,
            'categories'=>$categories,
            'subCat'=>$subCat,
            'animalCategory'=>$animal_category,
            'filteredProducts' => $filteredProducts]);
    }

    public function showFilterProducts(ProductCategory $product_category){
        $products = Product::all();
        $filteredProducts = Product::where('product_category_id', $product_category->id)->get();

        $categories = AnimalCategory::all();
        $subCat = ProductCategory::all();

        return view('product.showFilterProducts')->with([
            'products'=>$products,
            'categories'=>$categories,
            'subCat'=>$subCat,
            'filteredProducts' => $filteredProducts,
            'productCategory' => $product_category,
            ]);
    }
}
