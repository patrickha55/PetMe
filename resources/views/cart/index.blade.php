@extends('layouts.client.appWithoutCategory')

@section('content')
    <div class="w-75 row m-auto ">
        <div style="margin-top: 50px; margin-bottom: 200px;">
            <h1 class="text-center font-weight-bold col-12 mt-2 mb-5">
                {{ auth()->user()->userName }}'s Cart
            </h1>
            <div class="col-9">
                <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body row">
                        <img src="/storage/Image/product/cat/dry/kitten-chicken-and-turkey.png"  height="200px" width="80px" alt="" class="col-2">
                        <div class="col-7 m-auto">
                            <a href="#">
                                <h3>Kitten Chicken and Turkey</h3>
                            </a>
                            <a href="#">
                                <h4>Whiskas</h4>
                            </a>
                            <p>In stock</p>
                        </div>
                        <div class="col-2 m-auto">
                            <div class="row ">
                                <div class="col-3 m-auto">
                                    <a href="#">
                                        <i class="fas fa-minus-circle fa-lg"></i>
                                    </a>
                                </div>
                                <div class="col-6 m-auto">
                                    <form action="#" method="Post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="quanity"></label>
                                            <input type="number" class="form-control" name="quanity" id="quanity">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-3 m-auto">
                                    <a href="#">
                                        <i class="fas fa-plus-circle fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 m-auto text-right">
                            <a href="#">
                                <i class="fas fa-times fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card h4 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title text-center m-2">Items in your Cart</h5>
                        <div class="row border-top-1 mt-5 mb-5 pb-5 pt-5">
                            <div class="col-6 text-left">Subtotal</div>
                            <div class="col-6 text-right">1000 VNĐ</div>
                        </div>
                        <div class="row border-bottom-1 border-top-1 mt-5 mb-5 pb-5 pt-5">
                            <div class="col-6 text-left">Total</div>
                            <div class="col-6 text-right">1000 VNĐ</div>
                        </div>
                        <div class="text-center">
                            <a href="/checkout" class="btn btn-danger rounded w-100 h-75" style="font-size: 1.2rem; padding: 20px;">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
