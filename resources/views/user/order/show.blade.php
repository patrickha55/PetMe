@extends('layouts.client.appWithoutCategory')

@section('head')
    <style>
        .ratings i {
            cursor: pointer;
            transition: all 0.5s
        }

        .ratings i:hover {
            transform: scale(1.3)
        }
    </style>
@endsection

@section('content')
    <div class="w-75 row m-auto" style="margin-top: 50px; margin-bottom: 200px;">
        <h1 class="text-center font-weight-bold col-12 mt-5 mb-5">
            Order Detail - #{{ $order->id}}
        </h1>
        <div class="col-4">
            <h2>Customer's Address</h2>
{{--            {{ dd($order->user) }}--}}
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded h-75">
                <div class="row">
                    <div class="col-3 mt-1">
                        Address:
                    </div>
                    <div class="col-9 mt-1">
                        {{ $order->user->address->address }}, Ward {{ $order->user->address->ward }}, district {{ $order->user->address->district }}, {{ $order->user->address->city }} City.
                    </div>
                    <div class="col-3 mt-3">
                        Phone:
                    </div>
                    <div class="col-9 mt-3">
                        {{ auth()->user()->phoneNumber }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h2>Delivery Method</h2>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded h-75">
                <p>Free Delivery</p>
            </div>
        </div>
        <div class="col-4">
            <h2>Payment Method</h2>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded h-75">
                card
            </div>
        </div>
        <div class="col-12 card mb-3 shadow-lg p-3 mb-5 bg-white rounded mt-5">
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
                                        <div class="row">
                                            <div class="col-8">
                                                <a href="#" class="btn btn-primary" title="Write Review" data-toggle="modal" data-target="#reviewModal">Write a Review</a>
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
                <div class="col-12 text-right pl-4 pr-4 mt-3">
                    <div class="row">
                        <div class="col-10">
                            <p>Sub Total: </p>
                            <p>Total: </p>
                        </div>
                        <div class="col-2">
                            <p>@currency($order->total_price) VNĐ</p>
                            <p>@currency($order->total_price) VNĐ</p>
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
                        <form action="" method="post" class="row h4">
                            @csrf
                            <div class="form-group col-12">
                                <label for="title" class="h3">Title</label>
                                <input type="text" class="form-control @error('title') border-red-500 @enderror" name="title" id="title" placeholder="Title">
                                @error('title')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <h3 class="h3">Rate this product</h3>
                                <div class="ratings pt-2 pb-2" id="ratings">
                                    <i class="far fa-star fa-2x"></i>
                                    <i class="far fa-star fa-2x"></i>
                                    <i class="far fa-star fa-2x"></i>
                                    <i class="far fa-star fa-2x"></i>
                                    <i class="far fa-star fa-2x"></i>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="content" class="h3">Content</label>
                                <textarea class="form-control" name="content" id="content" rows="3">Your thought...</textarea>
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

@section('script')
    <script src="https://kit.fontawesome.com/c4201aab66.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.ratings i').click(function() {
                $('.ratings > i').removeClass('far');
                $(this).addClass('fas');
                $('.form').css('display', 'block');
            })
        });
    </script>
@endsection
