@extends('layouts.client.app')

@section('content')
<<<<<<< HEAD
   {{-- // @include('layouts.client.nav') --}}
=======
>>>>>>> main
    <div class="product-details ptb-100 pb-90">
        <div class="h4 container section-title-4 border-bottom-1 pb-15 font-weight-light">
            <a href="">Products</a>
            <a href="{{ route('home.showFilterAnimalProducts', $product->productCategory->animalCategory) }}"> > {{ $product->productCategory->animalCategory->name }}</a>
            <a href="{{ route('home.showFilterProducts', $product->productCategory) }}"> > {{ $product->productCategory->name }}</a>
        </div>
        <div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="section-title-4 text-center mb-40">
                <h2>Product Detail</h2>
            </div>
            <div class="row mb-20">
                <div class="col-md-12 col-lg-7 col-12">
                    <div class="product-details-5 pr-70 ">
                        @if(!empty($product->img))
                            <img class="mx-auto" src="/storage/Image/product/{{ $product->img }}" alt="{{ $product->name }}">
                        @else
                            <img class="mx-auto" src="/storage/Image/product/noimage.jpg" alt="{{ $product->name }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-12">
                    <div class="product-details-content">
                        <h3>{{$product->name}}</h3>
                        <h2>Brand: {{ $product->supplier->name }}</h2>
                        <div class="rating-number b4-">
                            <div class="quick-view-rating">
                                <i class="pe-7s-star red-star"></i>
                                <i class="pe-7s-star red-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                            </div>
                            <div class="quick-view-number">
                                <span>{{ $product->userReviews->count() }} Rating (S)</span>
                            </div>
                        </div>
                        <div class="details-price">
                            <span>@currency($product->price) VNĐ</span>
                        </div>
                        <p>{!! $product->description !!}</p>

                        <div class="quickview-plus-minus">

                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="{{route('cart.add', $product)}}">add to cart</a>
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="">Buy Now</a>
                            </div>

                        </div>
                        <div class="product-details-cati-tag mt-35">
                            <ul>
                                <li class="categories-title">Categories :</li>
                                @foreach($categories as $category)
                                    <li><a href="">{{$category->name}}</a></li>
                                    @foreach($category->productCategories as $proCat)
                                    <li><a href="">{{ $proCat->name }}</a></li>
                                    @endforeach
                                    /
                                @endforeach
                            </ul>
                        </div>
                        <div class="product-share">
                            <ul>
                                <li class="categories-title">Share :</li>
                                <li>
                                    <a href="facebook.com">
                                        <i class="icofont icofont-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
    

    {{-- reviews section --}}

        @include('product._reviews')
        </div>
    <!-- related product area start -->
    @include('product._related-product')
    </div>
@endsection

