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
    public function create(Product $product)
    {
        return view('user.review.create')->with('product', $product);
    }

    /**
     * Store a newly created resource in storages
     */
    public function store(Request $request, Product $product): RedirectResponse
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'min:10'
        ]);

        ProductReview::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'title' => $request->title,
            'rating' => $request->rating,
            'content' => $request->body
        ]);

        return redirect()->route('review.index')->with('status', 'Thank you for your review, we will evaluate it and publish it as soon as possible!');
    }

    /**
     * Display the specified resource.
     *
     * @param  ProductReview  $productReview
     */
    public function show(ProductReview $productReview)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProductReview  $productReview
     */
    public function edit(ProductReview $review)
    {
        return view('user.review.edit')->with('review', $review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  ProductReview  $review
     */
    public function update(Request $request, ProductReview $review)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'min:10'
        ]);

        $review->update([
            'title' => $request->title,
            'rating' => $request->rating,
            'content' => $request->body
        ]);

        return redirect()->route('review.index')->with('status', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ProductReview $review
     * @throws \Exception
     */
    public function destroy(ProductReview $review)
    {
        $review->delete();

        return redirect()->back()->with('status', 'Review deleted successfully!');
    }
}
