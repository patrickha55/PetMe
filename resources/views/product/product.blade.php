<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<div class="custom-col-style-2 custom-col-5 shadow p-3 mb-5 bg-white rounded">
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
                @php
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
                    @else
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
