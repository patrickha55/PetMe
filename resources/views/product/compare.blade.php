@extends('layouts.client.appWithoutCategory')

@section('head')
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
    <!--Content-->
    @if(session('status'))
        <div id="statusSession" class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="text-center my-5 font-weight-bold">
        Products Comparison
    </h1>
    <div class="mx-auto mb-100" style="width: 90%;">
        @if(count($results))
            <div class="row m-auto">
                @foreach ($results as $product)
                    <div class="col-3 shadow bg-white rounded mx-auto px-5 pb-5">
                        <div class="py-4 my-5 text-center border-bottom-1">
                            <h4 class="font-weight-bold"><a href="{{ route('home.show', $product) }}">{{ $product->name }}</a></h4>
                        </div>
                        <div class="product-details-5 mb-4 ">
                            @if (!empty($product->img))
                                <img class="" src="/storage/Image/product/{{ $product->img }}" alt="{{ $product->name }}"
                                     width="50%">
                            @else
                                <img class="" src="/storage/Image/product/noimage.jpg" alt="{{ $product->name }}">
                            @endif
                        </div>

                        <div class="product-details-content">
                            <h3>Brand: {{ $product->supplier->name }}</h3>
                            <div class="rating-number pt-4 pb-4">
                                @php
                                    $rating = \App\ProductReview::where('product_id', $product->id)->avg('rating');
                                @endphp
                                @for ($i = 0; $i < 5; $i++)
                                    @if (floor($rating) - $i >= 1) <i class="fas
                                fa-star fa-2x" style="color: #facf2c"></i>
                                    @elseif($rating -$i > 0)
                                        <i class="fas fa-star-half fa-2x" style="color:
                                #facf2c"></i>
                                    @else
                                        <i class="far fa-star fa-2x"></i> @endif
                                @endfor
                            </div>
                            <div class="details-price">
                                <span>@currency($product->price) VNĐ</span>
                            </div>
                            <div class="mt-2 mb-2">
                                @if ($product->stock > 10)
                                    <p class="text-success">Available</p>
                                @elseif($product->stock <= 10 && $product->stock > 1)
                                    <p class="text-danger">Only {{ $product->stock }} lefts</p>
                                @elseif($product->stock == 1)
                                    <p class="text-danger">Only 1 left</p>
                                @else
                                    <p class="text-danger">Out of stock. Please come back later.</p>
                                @endif
                            </div>
                            <div class="product-description-review">
                                <div class="mb-4 border-b h6">

                                    {{-- Description --}}

                                    <div class="" id="pro-dec" role="tabpanel">
                                        <h4 class="font-weight-bold">
                                            Description
                                        </h4>
                                        <div>
                                            <p> {{ $product->description }}</p>
                                        </div>
                                    </div>

                                    {{-- ingredient --}}

                                    @if ($product->detail->ingredients != null)
                                        <div id="ingredient" role="tabpanel">
                                            <h4 class="font-weight-bold">
                                                Ingedients
                                            </h4>
                                            <p>
                                                {{ $product->detail->ingredients }}
                                            </p>
                                        </div>

                                        {{-- Nutrition --}}
                                    @elseif($product->detail->nutritionFact != null)
                                        <div>
                                            <h4 class="font-weight-bold">
                                                Nutrient Facts
                                            </h4>
                                            <div class="" id="nutrient" role="tabpanel">
                                                <table class="table table-striped table-dark">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" colspan="2" class="bg-dark">Nutrition Facts</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Serving Size</th>
                                                        <td>{{ $product->detail->nutritionFact->serving_size }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Calories</th>
                                                        <td>{{ $product->detail->nutritionFact->calories }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Protein</th>
                                                        <td>{{ $product->detail->nutritionFact->protein }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Fat Content</th>
                                                        <td>{{ $product->detail->nutritionFact->fat_content }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Crude Fiber</th>
                                                        <td>{{ $product->detail->nutritionFact->crude_fiber }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Total Carbohydrate</th>
                                                        <td>{{ $product->detail->nutritionFact->total_carbohydrate }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sugar</th>
                                                        <td>{{ $product->detail->nutritionFact->sugar }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Crude Ash</th>
                                                        <td>{{ $product->detail->nutritionFact->crude_ash }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Calcium</th>
                                                        <td>{{ $product->detail->nutritionFact->calcium }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Vitamin A</th>
                                                        <td>{{ $product->detail->nutritionFact->vitamin_A }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Moisture</th>
                                                        <td>{{ $product->detail->nutritionFact->moisture }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @elseif($product->detail->materials != null)
                                        <div>
                                            <h4>
                                                Materials
                                            </h4>
                                            <div>
                                                <p>
                                                    {{ $product->detail->materials }}
                                                </p>
                                            </div>
                                        </div>
                                    @else
                                        <div>
                                            <h4>
                                                N/A
                                            </h4>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-6 m-auto  btn rounded btn-dark">
                                    <a class="uppercase text-white" href="{{ route('cart.add', $product) }}">add to cart</a>
                                </div>
                                <div class="col-4 m-auto  btn rounded btn-dark">
                                    <a class="uppercase text-white" href="{{ route('compare.destroy', $product) }}">Remove</a>
                                </div>
                                <div class="col-10 mx-auto mt-10  btn rounded btn-dark">
                                    <a class="uppercase text-white" href="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center">
                <div class="m-auto">
                    <img src="/storage/Image/nothingToCompare.jpg" alt="nothingToCompare">
                </div>
                <div class="my-50">
                    <h2 class="mb-50">There is nothing to compare</h2>
                    <a href="{{ route('products') }}" class="btn-lg btn-primary">Find products to compare.</a>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('script')

    {{-- Hien status tra ve tu route --}}

    <script>
        $( "#statusSession" ).fadeIn( 500 ).delay( 2000 ).fadeOut( 500 );
    </script>

@endsection
