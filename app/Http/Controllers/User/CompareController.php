<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(session()->all());
        return view('product.compare');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Product $product)
    {
        if(count(session()->all()) >= 6){
            return redirect()->back()->with('status', 'Maximum products for comparison are 3. Please remove a product before adding another product.');
        } else {
            session()->put('product' . $product->id, $product);
    
            return redirect()->back()->with('status', 'Product ' . $product->name . ' added to compare page.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Product $product)
    {
        session()->forget('product'.$product->id);

        return redirect()->back()->with('status', 'Product removed from compare page.');
    }
}
