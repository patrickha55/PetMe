@extends('layouts.client.app') 
<style>

</style>
@section('content')
    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="h4 section-title-4 border-bottom-1 pb-15 font-weight-light">
                <a href="">Products</a>
            </div>
            <div class="section-title-4 text-center mb-40">
                <h2>Products</h2>
            </div>
            <div class="row">
                <div class="dropdown col-sm-3">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <article class="card-group-item">
                            <header class="card-header" style="background: #2B2B2B";>
                                <h6 class="title font-weight-bold" style="color: #fff;">Range input </h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>Min</label>
                                  <input type="number" class="form-control" id="inputEmail4" placeholder="$0">
                                </div>
                                <div class="form-group col-md-6 text-right">
                                  <label>Max</label>
                                  <input type="number" class="form-control" placeholder="$1,0000">
                                </div>
                                </div>
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- card-group-item.// -->
                        <article class="card-group-item">
                            <header class="card-header" style="background: #2B2B2B">
                                <h6 class="title font-weight-bold" style="color: #fff;">Selection </h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">52</span>
                                          <input type="checkbox" class="custom-control-input" id="Check1">
                                          <label class="custom-control-label" for="Check1">Top Star</label>
                                    </div> <!-- form-check.// -->
                    
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">132</span>
                                          <input type="checkbox" class="custom-control-input" id="Check2">
                                         <label class="custom-control-label" for="Check2">Popular</label>
                                    </div> <!-- form-check.// -->
                    
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">17</span>
                                          <input type="checkbox" class="custom-control-input" id="Check3">
                                          <label class="custom-control-label" for="Check3">Dog Toys</label>
                                    </div> <!-- form-check.// -->
                    
                                    <div class="custom-control custom-checkbox">
                                        <span class="float-right badge badge-light round">7</span>
                                          <input type="checkbox" class="custom-control-input" id="Check4">
                                          <label class="custom-control-label" for="Check4">Cat Litter</label>
                                    </div> <!-- form-check.// -->
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- card-group-item.// -->
                    </div> <!-- card.// -->
                </div>
                <div class="top-product-style col-sm-9">
                    <div>
                        <div id="electro1">
                            <div class="custom-row-2 shadow p-3 mb-5 bg-white rounded row">
                                @foreach($products as $product)
                                    <div class="custom-col-style-2 col-3">
                                        <div class="product-wrapper product-border mb-24">
                                            <div class="product-img-3">
                                                <a href="{{route('home.show', $product)}}">
                                                    @if(!empty($product->img))
                                    
                                                    <img src="/storage/Image/product/{{ $product->img }}" alt="">
                                                    @else
                                                        <img src="/storage/Image/product/noimage.jpg" alt="">
                                                    @endif
                                                </a>
                                                <div class="product-action-right">
                                                    <a class="animate-right" href="{{route('home.show', $product)}}" title="View">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                    <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product)}}">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    {{--@php
                                                        $favorite = \App\Favorite::where('product_id', $product->id)->where('user_id', auth()->id())->get()
                                                    @endphp
                                                    @foreach($favorite as $fav)
                                                        @if($fav != null)
                                                            <form action="{{ route('wishlist.delete', [$fav->user_id, $fav->product_id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="animate-left" title="Remove From Wishlist" style="border: none;">
                                                                    <i class="fa-fas-heart"></i>
                                                                </button>
                                                            </form>
                                                        @else--}}
                                                        <a class="animate-left" title="Wishlist" href="{{ route('wishlist.store', $product) }}">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    {{--@endif
                                                    @endforeach--}}
                                                </div>
                                            </div>
                                            <div class="product-content-4 text-center">
                                                <div class="product-rating-4">
                                                    <i class="icofont icofont-star yellow"></i>
                                                    <i class="icofont icofont-star yellow"></i>
                                                    <i class="icofont icofont-star yellow"></i>
                                                    <i class="icofont icofont-star yellow"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                                <h4>
                                                    <a href="{{route('home.show', $product)}}">{{$product->name}}</a>
                                                </h4>
                                                    {{--<span>{{ $product->description }}</span>--}}
                                                <h5> @currency( $product->price ) VNĐ </h5>
                                                <p>{{$product->supplier->name ?? 'N/A'}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


