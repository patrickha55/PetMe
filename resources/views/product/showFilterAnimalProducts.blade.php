@extends('layouts.client.app')

@section('content')

    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="h4 section-title-4 border-bottom-1 pb-15 font-weight-light">
                <a href="">Products</a>
                <a href=""> > {{ $animalCategory->name }}</a>
            </div>
            <div class="section-title-4 text-center mb-40">
                <h2>{{ $animalCategory->name }}</h2>
            </div>
            <div class="top-product-style">
                <div>
                    <div id="electro1">
                        <div class="custom-row-2">
                            @foreach($filteredProducts as $product)
                                @include('product.product')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
