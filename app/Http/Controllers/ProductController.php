<?php

namespace App\Http\Controllers;

use App\AnimalCategory;
use App\NutritionFact;
use App\Product;
use App\ProductCategory;
use App\ProductDetail;
use App\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    public function index()
    {
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
            //Lay ten file voi kieu du lieu
            $fileNameWithExt = $request->file('img')->getClientOriginalName();
            // Lay ten file
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            // Lay kieu du lieu
            $extension = $request->file('img')->getClientOriginalExtension();
            // File de luu
            // Lay chu dau tien trong cau
            $category = explode(' ', trim(strtolower($request->category)));

            $fileNameToStore = strtolower($request->animal) . '/' . $category[0] . '/' . $fileName . '_' . time() . '.' . $extension;
            // Upload image
            $path = $request->file('img')->storeAs('public/Image/product/', $fileNameToStore);
        } else {
            $fileNameToStore = '/storage/Image/noimage.jpg';
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
                'product_details_id' => ProductDetail::firstWhere('product_id', $productID)->id,
            ]);
        }

        return redirect('/admin/product-management/product')->with('status', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product-management.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
