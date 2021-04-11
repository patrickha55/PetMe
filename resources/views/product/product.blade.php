<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<div class="custom-col-style-2 custom-col-5 shadow p-3 mb-5 bg-white rounded mr-5" style="width:20%">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="{{route('home.show', $product)}}">
                @if(!empty($product->img))
                    <img src="/storage/Image/product/{{ $product->img }}" alt="{{ $product-> name}}" height="250px" width="100px">
                @else
                    <img src="/storage/Image/product/noimage.jpg" alt="No image" width="200px" height="300px">
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
                @php
                    $rating = \App\ProductReview::where('product_id', $product->id)->avg('rating');
                @endphp
                @for($i = 0; $i < 5; $i++)
                    @if(floor($rating) - $i >= 1)
                        <i class="fas fa-star fa-2x" style="color: #facf2c"></i>
                    @elseif($rating -$i > 0)
                        <i class="fas fa-star-half fa-2x" style="color: #facf2c"></i>
                    @else
                        <i class="far fa-star fa-2x"></i>
                    @endif
                @endfor
            </div>
            <h4>
                <a href="{{route('home.show', $product)}}">{{$product->name}}</a>
            </h4>
                {{--<span>{{ $product->description }}</span>--}}
            <h5> @currency( $product->price ) VNĐ </h5>
            <p>{{$product->supplier->name ?? 'N/A'}}</p>
            <div class="mt-2 mb-2">
                @if($product->stock > 10)
                    <p class="text-success">Available</p>
                @elseif($product->stock <= 10 && $product->stock > 1)
                    <p class="text-danger">Only {{ $product->stock }} lefts</p>
                @elseif($product->stock == 1)
                    <p class="text-danger">Only 1 left</p>
                @else
                    <p class="text-danger">Out of stock. Please come back later.</p>
                @endif
            </div>
            @if (session('addToCart'))
                <p class="text-success">
                    {{ session('addToCart') }}
                </p>
            @endif
        </div>
    </div>
</div>
