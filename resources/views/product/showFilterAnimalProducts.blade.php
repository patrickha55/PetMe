@extends('layouts.client.app')

@section('content')

    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="h4 section-title-4 border-bottom-1 pb-15 font-weight-light">
                <a href="{{ route('products') }}">Products</a>
                <a href="{{ route('home.showFilterAnimalProducts', $animalCategory) }}"> > {{ $animalCategory->name }}</a>
            </div>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="section-title-4 text-center mb-40">
                    <h2>{{ $animalCategory->name }}</h2>
                </div>
                <div class="top-product-style">
                    <div>
                        <div id="electro1">
                            <div class="custom-row-2">
                                @foreach($filteredProducts as $product)
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
                                            @include('layouts.client.includes.rating')

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
