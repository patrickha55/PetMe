<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use App\AnimalCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function create(){
        $categories = AnimalCategory::all();
        return view('admin.product-management.category.createSubCategory', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|numeric',
            'name' => 'required|string|max:255'
        ]);

        ProductCategory::create([
            'name' => $request->name,
            'animal_category_id' => $request->category_id
        ]);

        return redirect()->route('category.index')->with('status','Sub Category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product\ProductCategory  $productCategory
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    public function edit(ProductCategory $productCategory)
    {
        $categories = AnimalCategory::all();
        return view('admin.product-management.category.editSubCategory')->with([
            'productCategory' => $productCategory,
             'categories' => $categories
             ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $this->validate($request, [
            'category_id' => 'required|numeric',
            'name' => 'required|string|max:255'
        ]);

        ProductCategory::find($productCategory->id)->update([
            'name' => $request->name,
            'animal_category_id' => $request->category_id
        ]);

        return redirect()->route('category.index')->with('status', 'Sub Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product\ProductCategory  $productCategory
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();

        return back()->with('status', 'Sub Category hid!');
    }
}
