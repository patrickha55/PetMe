@extends('layouts.client.appWithoutCategory')

@section('content')
    <div class="w-75 row m-auto" style="margin-top: 50px; margin-bottom: 200px;">
        <h1 class="text-center font-weight-bold col-12 mt-5 mb-5">
            Order Detail - #{{ $order->id}}
        </h1>
        <div class="col-4">
            <h2>Customer's Address</h2>
{{--            {{ dd($order->user) }}--}}
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                <p>Address: {{ $order->user->address->address }}, Ward {{ $order->user->address->ward }}, district {{ $order->user->address->district }}, {{ $order->user->address->city }} City.</p>
            </div>
        </div>
        <div class="col-4">
            <h2>Delivery Method</h2>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                <p>Free Delivery</p>
            </div>
        </div>
        <div class="col-4">
            <h2>Payment Method</h2>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                card
            </div>
        </div>
        <div class="col-12 card mb-3 shadow-lg p-3 mb-5 bg-white rounded row">
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
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="#" class="btn btn-primary">Write a Review</a>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td>@currency($product->pivot->price) VNĐ</td>
                            <td>{{ $product->pivot->quantity }}</td>
                            <td>@currency($product->pivot->price * $product->pivot->quantity) VNĐ</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-right col-12 row border-top-1">
                <div class="col-9">
                    <p>Sub Total: </p>
                    <p>Total: </p>
                </div>
                <div class="col-3">
                    <p>@currency($order->total_price) VNĐ</p>
                    <p>@currency($order->total_price) VNĐ</p>
                </div>
            </div>
        </div>
    </div>
@endsection
