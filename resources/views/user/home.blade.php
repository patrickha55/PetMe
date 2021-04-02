@extends('layouts.client.app')

@section('content')

    <div class="section-title-4 text-center mb-40">
    <h2>New Products</h2>
    </div>
    <div class="electronic-banner-area">
        <div class="custom-row-2">
             @foreach ($trend as $product)
                <div class="custom-col-style-2 electronic-banner-col-3 mb-30 ">
                    <div class="electronic-banner-wrapper" >
                        <img  src="/storage/Image/product/{{ $product->img }}" >
                        <div class="  electro-banner-style electro-banner-position bg-light " style="opacity:0.8">

                            <h1 class=" text-info opacity-5">{{ $product->name }}</h1>
                            <h2>@currency($product->price) VNĐ</h2>
                            <h4>Available</h4>
                            <a href="{{ route('home.show',$product) }}">Buy Now→</a>
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
            <div>

            </div>
        </div>
    </div>
@endsection
