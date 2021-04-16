<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductReview;
use App\Product;

class ProductReviewController extends Controller
{

    public function index()
    {   
        $reviews = ProductReview::orderByDesc('created_at')->paginate(10);
        return view('admin.review.index')->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
     */
    public function update(Request $request, $user_id, $product_id)
    {
        ProductReview::where('user_id', $user_id)->where('product_id', $product_id)->update([
            'status' => $request->status
        ]);

        return back()->with('status', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductReview $review)
    {
        $review->delete();

        return back()->with('status', 'Review delete successfully!');
    }
}
