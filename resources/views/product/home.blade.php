@extends('layouts.client.app')

@section('style')
    <style>
        #statusSession{
            position:absolute;
            bottom:20px;
            right:20px;
            z-index:10;
        }
    </style>
@endsection

@section('content')

    <div class="section-title-4 text-center mb-40">
        <h2>New Products</h2>
    </div>
    @if (session('status'))
        <div class="alert alert-success" id="statusSession">
            {{ session('status') }}
        </div>
    @endif
    <div class="electronic-banner-area">
        <div class="custom-row-2">
             @foreach ($trend as $product)
                <div class="custom-col-style-2 electronic-banner-col-3 mb-30" id="myProduct">
                    <div class="electronic-banner-wrapper shadow p-3 mb-5 bg-white rounded">
                        <img class="col-6" style="" src="/storage/Image/product/{{ $product->img }}" width="auto" height="">
                        <div class="col-6" style="opacity:0.7;">
                            <h4 class=" text-info opacity-5">{{ $product->name }}</h4>
                            <h5>@currency($product->price) VNĐ</h5>
                            <div class="mt-2 mb-2">
                                @if($product->stock > 5)
                                    <p class="text-success">Available</p>
                                @elseif($product->stock <= 5 && $product->stock > 0)
                                    <p class="text-danger">Only {{ $product->stock }} lefts</p>
                                @else
                                    <p class="text-danger">Out of stock. Please come back later.</p>
                                @endif
                            </div>
                            <a style="margin-bottom: 50px;" href="{{ route('cart.buynow',$product) }}">Buy Now→</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
             {{--
             <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                 <div class="electronic-banner-wrapper">
                     <img  src="images/Products/{{ $trend[1]->img }} " alt="" >
                     <div class="electro-banner-style electro-banner-position2">
                         <h1>{{ $trend[1]->name }} </h1>
                         <h2>up to 15% off</h2>
                         <h4>Amazon exclusives</h4>
                         <a href="product-details.html">Buy Now→</a>
                     </div>
                 </div>
             </div>
             <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                 <div class="electronic-banner-wrapper" >
                     <img  src="imgages/Products/{{ $trend[2]->img }} " alt="">
                     <div class="electro-banner-style electro-banner-position3">
                         <h1>BY Laptop</h1>
                         <h2>Super Discount</h2>
                         <h4>Amazon exclusives</h4>
                         <a href="product-details.html">Buy Now→</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 --}}

    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Top Products</h2>
            </div>
            <div class="top-product-style">
                <div>
                    <div id="electro1">
                        <div class="custom-row-2">
                            @foreach($topProducts as $product)
                                @include('product.product')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $( "#statusSession" ).fadeIn( 500 ).delay( 2000 ).fadeOut( 500 );
    </script>
@endsection