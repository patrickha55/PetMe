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