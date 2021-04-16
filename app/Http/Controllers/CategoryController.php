<?php

namespace App\Http\Controllers;

use App\AnimalCategory;
use App\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke()
    {
        $categories = AnimalCategory::all();
        $subCategories = ProductCategory::all();

        return view('admin.product-management.category.index')->with('categories', $categories)->with('subCategories', $subCategories);
    }
}
