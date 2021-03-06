<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Category;
use App\CartDetail;
use App\ProductReview;
use App\AnimalCategory;
use App\ProductCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function index(): Renderable
    {
        $products = Product::paginate(20);

        $categories = AnimalCategory::all();
        $subCat = ProductCategory::all();

        return view('product.index')->with([
            'products' => $products,
            'categories' => $categories,
            'subCat' => $subCat
        ]);
    }

    public function home()
    {
        $products = Product::paginate(10);

        $productIdsWithAvgRating = \App\ProductReview::selectRaw('product_id ,AVG(rating) rating')
                                                    ->where('status','approved')
                                                    ->where('rating', '>=', 4)
                                                    ->groupBy('product_id')->get();

        $productsWithAvgRating = collect([]);

        foreach($productIdsWithAvgRating as $productIdWithAvgRating){
            $product = \App\Product::find($productIdWithAvgRating->product_id);
            $productsWithAvgRating->push($product);
        }



        $trend = $products->sortByDesc('created_at')->take(3);

        $categories = AnimalCategory::all();
        $subCat = ProductCategory::all();

        return view('product.home')->with([
            'products'=>$products,
            'categories'=>$categories,
            'subCat'=>$subCat,
            'trend'=>$trend,
            'topProducts' => $productsWithAvgRating,
        ]);
    }

    // Hien trang product detail

    public function show(Product $product){
        $products = Product::all();
        $categories = AnimalCategory::all();
        $subCats = ProductCategory::all();

        //Lay thong tin user da review san pham o parameter phia tren

        $userReviewsForRating = $product->userReviews()->where('status', 'approved')->get();
        $userReviews = $product->userReviews()->where('status', 'approved')->orderByDesc('created_at')->paginate(2);

        // Tinh % rating theo tung muc rating

        $countFive = $countFour = $countThree = $countTwo = $count= 0;
        $one = $two = $three = $four = $five = 0;
        foreach ($userReviewsForRating as $review){
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
            $five = $countFive ;
        }

        if ($countFour != 0){
            $four = $countFour;
        }

        if ($countThree != 0){
            $three = $countThree;
        }

        if ($countTwo != 0){
            $two = $countTwo;
        }

        if ($count != 0){
            $one = $count;
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
