<?php

namespace App\Http\Controllers;

use App\AnimalCategory;
use App\NutritionFact;
use App\Product;
use App\ProductCategory;
use App\ProductDetail;
use App\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    public function index()
    {
        /*Product::withTrashed()
            ->where('id', 1)
            ->restore();*/
        $products = Product::paginate(10);
        return view('admin.product-management.product.index')->with('products', $products);
    }


    public function create()
    {
        return view('admin.product-management.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'animal' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|min:0',
            'stock' => 'required|min:1',
            'origin' => 'required|string|max:255',
            'color' => 'required|string|nullable|max:255',
            'size' => 'required|string|max:255',
            'ingredient' => 'string|nullable',
            'material' => 'string|nullable',
            'instruction' => 'string|nullable',
            'servingSize' => 'string|nullable|max:255',
            'calories' => 'string|nullable|max:255',
            'protein' => 'string|nullable|max:255',
            'fatContent' => 'string|nullable|max:255',
            'carbohydrate' => 'string|nullable|max:255',
            'sugar' => 'string|nullable|max:255',
            'crudeAsh' => 'string|nullable|max:255',
            'crudeFiber' => 'string|nullable|max:255',
            'calcium' => 'string|nullable|max:255',
            'vitaminA' => 'string|nullable|max:255',
            'moisture' => 'string|nullable|max:255',
            'img' => 'image|nullable|max:1999',
        ]);
        /* Xu ly up anh */
        if ($request->hasFile('img')) {
            $fileNameToStore = Product::uploadImg($request);
            $path = $request->file('img')->storeAs('public/Image/product/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $categoryID = ProductCategory::getProductCategoryID($request->category);
        $supplierID = Supplier::getSupplierID($request->supplier);

        Product::create([
            'product_category_id' => $categoryID,
            'supplier_id' => $supplierID,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'img' => $fileNameToStore,
        ]);

        $productID = Product::firstWhere('name', $request->name)->id;

        ProductDetail::create([
            'product_id' => $productID,
            'origin' => $request->origin,
            'ingredients' => $request->ingredient,
            'materials' => $request->material,
            'color' => $request->color,
            'size' => $request->size,
            'instruction' => $request->instruction,
        ]);

        if (isset($request->servingSize)){
            NutritionFact::create([
                'serving_size' => $request->servingSize,
                'calories' => $request->calories,
                'protein' => $request->protein,
                'fat_content' => $request->fatContent,
                'total_carbohydrate' => $request->carbohydrate,
                'sugar' => $request->sugar,
                'crude_ash' => $request->crudeAsh,
                'crude_fiber' => $request->crudeFiber,
                'calcium' => $request->calcium,
                'moisture' => $request->moisture,
                'product_detail_id' => ProductDetail::firstWhere('product_id', $productID)->id,
            ]);
        }

        return redirect('/admin/product-management/product')->with('status', 'Product added successfully!');
    }

    /*
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     *
     */
   public function show(Product $product)
    {
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

        return view('admin.product-management.product.show', [
            'product' => $product,
            'five' => $five,
            'four' => $four,
            'three' => $three,
            'two' => $two,
            'one' => $one
            ]);
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     *
     */
    public function edit(Product $product)
    {
        return view('admin.product-management.product.edit')->with('product', $product);
    }

    /*
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     *
     * @throws ValidationException
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $this->validate($request,[
            'animal' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|min:0',
            'stock' => 'required|min:1',
            'origin' => 'required|string|max:255',
            'color' => 'required|string|nullable|max:255',
            'size' => 'required|string|max:255',
            'ingredient' => 'string|nullable',
            'material' => 'string|nullable',
            'instruction' => 'string|nullable',
            'servingSize' => 'string|nullable|max:255',
            'calories' => 'string|nullable|max:255',
            'protein' => 'string|nullable|max:255',
            'fatContent' => 'string|nullable|max:255',
            'carbohydrate' => 'string|nullable|max:255',
            'sugar' => 'string|nullable|max:255',
            'crudeAsh' => 'string|nullable|max:255',
            'crudeFiber' => 'string|nullable|max:255',
            'calcium' => 'string|nullable|max:255',
            'vitaminA' => 'string|nullable|max:255',
            'moisture' => 'string|nullable|max:255',
            'img' => 'image|nullable|max:1999',
        ]);

        $categoryID = ProductCategory::getProductCategoryID($request->category);
        $supplierID = Supplier::getSupplierID($request->supplier);

        if ($request->hasFile('img')) {
            $fileNameToStore = Product::uploadImg($request);
            $path = $request->file('img')->storeAs('public/Image/product/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        Product::updateOrCreate(['id' => $product->id],[
            'product_category_id' => $categoryID,
            'supplier_id' => $supplierID,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'img' => $fileNameToStore,
        ]);

       /* Product::where('id', $product->id)->update([
            'product_category_id' => $categoryID,
            'supplier_id' => $supplierID,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'img' => $fileNameToStore,
        ]);*/

        ProductDetail::where('id', $product->detail->id)->update([
            'product_id' => $product->id,
            'origin' => $request->origin,
            'ingredients' => $request->ingredient,
            'materials' => $request->material,
            'color' => $request->color,
            'size' => $request->size,
            'instruction' => $request->instruction,
        ]);

        if (isset($request->servingSize)){
            NutritionFact::where('id', $product->detail->nutritionFact->id)->update([
                'serving_size' => $request->servingSize,
                'calories' => $request->calories,
                'protein' => $request->protein,
                'fat_content' => $request->fatContent,
                'total_carbohydrate' => $request->carbohydrate,
                'sugar' => $request->sugar,
                'crude_ash' => $request->crudeAsh,
                'crude_fiber' => $request->crudeFiber,
                'calcium' => $request->calcium,
                'moisture' => $request->moisture,
                'product_detail_id' => $product->detail->id,
            ]);
        }

        return redirect()->route('product.index')->with('status', 'Product updated successfully!');
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @throws \Exception
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        
        if(count($product->detail)){
            $product->detail->delete();
        }

        if(count($product->detail->nutritionFact)){
        $product->detail->nutritionFact->delete();
        }

        return redirect()->back()->with('status', 'Product deleted successfully!');
    }
}
