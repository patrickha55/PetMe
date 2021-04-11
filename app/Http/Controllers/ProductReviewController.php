<?php

namespace App\Http\Controllers;

use App\ProductReview;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Product;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resources
     */
    public function index()
    {
        $reviews = ProductReview::where('user_id', auth()->id())->get();
        return view('user.review.index')->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new resources
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storages
     */
    public function store(Request $request, Product $product): RedirectResponse
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required|min:10'
        ]);

        ProductReview::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'title' => $request->title,
            'rating' => $request->rating,
            'content' => $request->body
        ]);

        return back()->with('status', 'Thank you for your review, we will evaluate it and publish it as soon as possible!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductReview  $productReview
     * @return \Illuminate\Http\Response
     */
    public function show(ProductReview $productReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductReview  $productReview
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductReview $productReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductReview  $productReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductReview $productReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductReview  $productReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductReview $productReview)
    {
        //
    }
}
