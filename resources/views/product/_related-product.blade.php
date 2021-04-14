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
                    <div class="product-wrapper shadow p-3 mb-5 bg-white rounded">
                        <div class="product-img">
                            <a href="#">
                                <img src="/storage/Image/product/{{ $relatedProduct->img }}" alt="{{ $relatedProduct->name }}" class="mx-auto">
                            </a>
                            <div class="product-action">
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#productModal"
                                   href="#" data-object = {{ $relatedProduct->img }}>
                                    <i class="pe-7s-look"></i>
                                </a>
                                @if(session()->has('product'.$product->id))
                                    @if(session()->get('product'.$product->id) != null)
                                        <a class="animate-right" href="{{route('compare.destroy', $product)}}" title="Remove From Compare">
                                            <i class="fas fa-exchange-alt text-danger"></i>
                                        </a>
                                    @endif    
                                @else
                                    <a class="animate-right" href="{{route('compare.store', $product)}}" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                @endif
                                <a class="animate-top" title="Add To Cart" href="{{ route('cart.add', $relatedProduct) }}">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                @if(isset($relatedProduct->userFavorites->find(auth()->id())->id))
                                    @if($relatedProduct->userFavorites->find(auth()->id())->id == auth()->id())
                                        <form action="{{ route('wishlist.delete', ['product_id' => $relatedProduct->id, 'user_id' => auth()->id()]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class='btn-lg b-none  animate-left' title="Remove from Wishlist"><i class="fas fa-heart"></i></button>
                                        </form>
                                    @endif    
                                @else
                                    <a class="animate-left" title="Wishlist" href="{{ route('wishlist.store', $relatedProduct) }}">
                                        <i class="far fa-heart"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4><a href="{{ route('home.show', $relatedProduct) }}">{{ $relatedProduct->name }}</a></h4>
                            <span>@currency($relatedProduct->price) VNĐ</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
