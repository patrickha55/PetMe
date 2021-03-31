<div class="product-area pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="product-style">
            <div class="related-product-active owl-carousel">
                @php
                    $relatedProducts = App\Product::where('product_category_id', $product->product_category_id)->get();
                @endphp
                @foreach($relatedProducts as $relatedProduct)
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/storage/Image/product/{{ $relatedProduct->img }}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal"
                                   href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="{{ route('home.show', $relatedProduct) }}">{{ $relatedProduct->name }}</a></h4>
                            <span>{{ $relatedProduct->price }} VNĐ</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
