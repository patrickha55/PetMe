<?php

namespace App\Http\Controllers;

use App\AnimalCategory;
use App\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = AnimalCategory::all();
        $subCategories = ProductCategory::all();

        return view('admin.product-management.category.index')->with('categories', $categories)->with('subCategories', $subCategories);
    }


    public function create()
    {
        return view('admin.product-management.category.create');
    }

    public function createSubCategory(){
        return view('admin.product-management.category.createSubCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Product\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
