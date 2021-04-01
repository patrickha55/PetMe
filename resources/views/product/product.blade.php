<div class="custom-col-style-2 custom-col-5">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="{{route('home.show', $product->id)}}">
                @if(!empty($product->img))
<<<<<<< HEAD:resources/views/product/_single_product.blade.php
           
=======

>>>>>>> main:resources/views/product/product.blade.php
                <img src="/storage/Image/product/{{ $product->img }}" alt="">
                @else
                    <img src="/storage/Image/product/noimage.jpg" alt="">
                @endif
            </a>
            <div class="product-action-right">
                <a class="animate-right" href="{{route('home.show', $product->id)}}" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product)}}">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="#">
                    <i class="pe-7s-like"></i>
                </a>
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
            <h4><a href="{{route('home.show', $product->id)}}">{{$product->name}}</a></h4>
            <span>{{$product->description}}</span>
            <h5>{{$product->price}} VNĐ</h5>
        <p>{{$product->supplier->name ?? 'n/a'}}</p>
        </div>
    </div>
</div>
<script>

</script>