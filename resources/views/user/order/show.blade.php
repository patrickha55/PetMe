@extends('layouts.client.appWithoutCategory')

@section('content')
    <div class="w-75 row m-auto" style="margin-top: 50px; margin-bottom: 200px;">
        <h1 class="text-center font-weight-bold col-12 mt-5 mb-5">
            Order Detail - #{{ $order->id}} - <small class="text-secondary">{{ $order->status }}</small>
        </h1>
        <div class="col-4">
            <h2>Customer's Address</h2>
{{--            {{ dd($order->user) }}--}}
            <div class="card shadow-lg p-3 mb-5 bg-white rounded h-75">
                <div class="row">
                    <div class="col-3 mt-1">
                        <h5>Address:</h5>
                    </div>
                    <div class="col-9 mt-1">
                        <p>{{ $order->user->address->address }}, Ward {{ $order->user->address->ward }}, district {{ $order->user->address->district }}, {{ $order->user->address->city }} City.</p>
                    </div>
                    <div class="col-3 mt-3">
                        <h5>Phone:</h5>
                    </div>
                    <div class="col-9 mt-3">
                        <p>{{ auth()->user()->phoneNumber }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h2>Delivery Method</h2>
            <div class="card shadow-lg p-3 mb-5 bg-white rounded h-75">
                <h5>Free Delivery</h5>
            </div>
        </div>
        <div class="col-4">
            <h2>Payment Method</h2>
            <div class="card shadow-lg p-3 mb-5 bg-white rounded h-75">
                <h5>Pay with cash</h5>
            </div>
        </div>
        <div class="col-12 card shadow-lg p-3 mb-5 bg-white rounded mt-5">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Sub total</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                {{ dd($order->productDetails) }}--}}
                        @foreach( $order->productDetails as $product)
                            <tr>
                                <th scope="row">
                                    <div class="col-2">
                                        <img src="/storage/Image/product/{{ $product->img }}" alt="{{ $product->name }}" width="60%" height="60%">
                                    </div>
                                    <div class="col-10">
                                        <a class="h3" href="{{ route('home.show', $product->id) }}">{{ $product->name }}</a>
                                        <div>
                                            Brand: <a href="#"> {{ $product->supplier->name }}</a>
                                        </div>
                                        @php
                                            $productReview = \App\ProductReview::where('user_id', auth()->id())->where('product_id', $product->id)->first();
                                        @endphp
                                        @if($productReview == null && $order->status == 'completed')
                                            <div class="row">
                                                <div class="col-8">
                                                    <a href="{{ route('review.create', $product) }}" class="btn btn-primary">Write a Review</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </th>
                                <td>@currency($product->pivot->price) VN??</td>
                                <td>{{ $product->pivot->quantity }}</td>
                                <td>@currency($product->pivot->price * $product->pivot->quantity) VN??</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12  pl-4 pr-4 mt-3">
                    <div class="row">
                        <div class="col-8 my-auto">
                            @if($order->status == 'pending')
                                <a href="{{ route('order.update', $order) }}" class="btn-lg btn-danger">Cancel Order</a>
                            @endif
                        </div>
                        <div class="col-2 text-right">
                            <p>Sub Total: </p>
                            <p>Total: </p>
                        </div>
                        <div class="col-2 text-right">
                            <p>@currency($order->total_price) VN??</p>
                            <p>@currency($order->total_price) VN??</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Review --}}
    <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document" >
            <div class="modal-content p-10">
                <div class="modal-body">
                    <div class="qwick-view-content text-left row">
                        <h2 class="text-center font-weight-bold h2">Review</h2>
                        <form action="{{ route('review.store', $product) }}" method="post" class="row h4" name="rating-form">
                            @csrf
                            <div class="form-group col-12">
                                <label for="title" class="h3">Title</label>
                                <input type="text" class="form-control @error('title') border-red-500 @enderror" name="title" id="title" placeholder="Title" value="{{ old('title') }}" required>
                                @error('title')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="h3">Rate this product</div>
                                <div class="ratings pt-2 pb-2" id="ratings">
                                    <input type="radio" id="r5" name="rating" value="5">
                                    <label for="r5">
                                        <i class="far fa-star fa-2x" data-index="5"></i>
                                    </label>
                                    <input type="radio" id="r4" name="rating" value="4">
                                    <label for="r4">
                                        <i class="far fa-star fa-2x" data-index="4"></i>
                                    </label>
                                    <input type="radio" id="r3" name="rating" value="3">
                                    <label for="r3">
                                        <i class="far fa-star fa-2x" data-index="3"></i>
                                    </label>
                                    <input type="radio" id="r2" name="rating" value="2">
                                    <label for="r2">
                                        <i class="far fa-star fa-2x" data-index="2"></i>
                                    </label>
                                    <input type="radio" id="r1" name="rating" value="1">
                                    <label for="r1">
                                        <i class="far fa-star fa-2x" data-index="1"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="body" class="h3">Content</label >
                                <textarea class="form-control @error('body') border-red-500 @enderror" name="body" id="body" rows="3" value="{{ old('body') }}">Your thought...</textarea>
                                @error('body')
                                <div class="text-sm text-danger-mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-2">
                                <button type="submit" class="btn btn-outline-dark rounded w-75 h-75 p-3 h3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
