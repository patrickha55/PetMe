<?php

namespace App\Http\Controllers;

use App\AnimalCategory;
use Illuminate\Http\Request;

class AnimalCategoryController extends Controller
{
    
    /* public function index()
    {
        
    } */

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.product-management.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255'
        ]);

        AnimalCategory::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index')->with('status', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product\AnimalCategory  $animalCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AnimalCategory $animalCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Product\AnimalCategory  $animalCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimalCategory $animalCategory)
    {
        return view('admin.product-management.category.edit')->with('category', $animalCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product\AnimalCategory  $animalCategory
     */
    public function update(Request $request, AnimalCategory $animalCategory)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255'
        ]);

        AnimalCategory::find($animalCategory->id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index')->with('status', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product\AnimalCategory  $animalCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimalCategory $animalCategory)
    {
        $animalCategory->delete();

        return back()->with('status', 'Category hid!');
    }
}
