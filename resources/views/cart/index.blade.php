@extends('layouts.client.appWithoutCategory')

@section('content')

<div class="w-75 row m-auto" style="margin-top: 50px; margin-bottom: 200px;">
        <h1 class="text-center font-weight-bold col-12 mt-2 mb-5">
            {{ auth()->user()->userName }}'s Cart
        </h1>
        @if($cartItems->count()>0)
            <div class="col-9">
                @foreach($cartItems as $cartItem)
       
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body row">
                            <img src="/storage/Image/product/{{ $cartItem->associatedModel->img }}"  height="200px" width="80px" alt="" class="col-2">
                            <div class="col-7 m-auto">
                                <a href="#">
                                    <h3>{{ $cartItem->name }}</h3>
                                </a>
                                <a href="#">
                                    <h4>{{ $cartItem->associatedModel->supplier->name }}</h4>
                                </a>
                                @if($cartItem->associatedModel->stock > 10)
                                    <p class="text-primary">In stock</p>
                                @else
                                    <p class="text-danger">Only {{ $cartItem->associatedModel->stock }} item/s left.</p>
                                @endif
                            </div>
                            <div class="col-2 m-auto">
                                <div class="row ">
                                    <div class="col-3 m-auto">
                                        @if($cartItem->quantity < 2)
                                            <i class="fas fa-minus-circle fa-lg"></i>
                                        @else
                                            <a href="{{ route('cart.minus', $cartItem->associatedModel) }}">
                                                <i class="fas fa-minus-circle fa-lg"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-6 m-auto">
                                        <form action="{{ route('cart.updateCart', $cartItem->associatedModel) }}" method="Post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="quantity"></label>
                                                <input type="number" class="form-control" name="quantity" id="quantity" min="1" value="{{ $cartItem->quantity }}">
                                            </div>
                                            <button type="submit" style="color: white;"></button>
                                        </form>
                                    </div>
                                    <div class="col-3 m-auto">
                                        <a href="{{ route('cart.plus', $cartItem->associatedModel) }}">
                                            <i class="fas fa-plus-circle fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 m-auto text-right">
                                <a href="{{ route('cart.deleteItem', $cartItem->associatedModel) }}">
                                    <i class="fas fa-times fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-3">
                <div class="card h5 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title text-center m-2">Items in your Cart</h5>
                        <div class="row border-top-1 mt-5 mb-5 pb-5 pt-5">
                            <div class="col-5 text-left">Subtotal</div>
                            <div class="col-7 text-right">@currency($subTotal) VNĐ</div>
                        </div>
                        <div class="row border-bottom-1 border-top-1 mt-5 mb-5 pb-5 pt-5">
                            <div class="col-5 text-left">Total</div>
                            <div class="col-7 text-right">@currency($total) VNĐ</div>
                        </div>
                        <div class="text-center">
                            <a href="/checkout" class="btn btn-danger rounded w-100 h-75" style="font-size: 1.2rem; padding: 20px;">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-12">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body row text-center">
                        <div class="m-auto">
                            <img src="/storage/Image/empty-cart.png" alt="Empty Cart">
                        </div>
                        <h3 class="col-12 mt-20 mb-20">There is no item in your cart.</h3>
                        <div class="m-auto">
                            <a href="{{ route('products') }}" class="col-12 btn-lg rounded btn-danger">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
  
@endsection
