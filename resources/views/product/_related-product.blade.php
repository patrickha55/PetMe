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
                @foreach($relatedProducts as $product)
                    <div class="product-wrapper shadow p-3 mb-5 bg-white rounded">
                        <div class="product-img">
                            <a href="#">
                                <img src="/storage/Image/product/{{ $product->img }}" alt="{{ $product->name }}" class="mx-auto">
                            </a>
                            <div class="product-action">
                                <a class="animate-right" title="Quick View" {{-- data-toggle="modal" data-target="#productModal" --}}
                                   href="{{ route('home.show', $product) }}">
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
                                <a class="animate-top" title="Add To Cart" href="{{ route('cart.add', $product) }}">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                @if(isset($product->userFavorites->find(auth()->id())->id))
                                    @if($product->userFavorites->find(auth()->id())->id == auth()->id())
                                        <form action="{{ route('wishlist.delete', ['product_id' => $product->id, 'user_id' => auth()->id()]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class='btn-lg b-none  animate-left' title="Remove from Wishlist"><i class="fas fa-heart"></i></button>
                                        </form>
                                    @endif    
                                @else
                                    <a class="animate-left" title="Wishlist" href="{{ route('wishlist.store', $product) }}">
                                        <i class="far fa-heart"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4><a href="{{ route('home.show', $product) }}">{{ $product->name }}</a></h4>
                            <span>@currency($product->price) VNĐ</span>
                        </div>
                    </div>
                    {{-- Modal --}}

                    {{-- <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="pe-7s-close" aria-hidden="true"></span>
                        </button>
                        <div class="modal-dialog modal-quickview-width" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="qwick-view-left">
                                        <div class="quick-view-learg-img">
                                            <div class="quick-view-tab-content tab-content">
                                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                                    <img src="" alt="" id="object">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick-view-list nav" role="tablist">
                                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                                <img src="/assets/img/quick-view/s1.jpg" alt="">
                                            </a>
                                            <a href="#modal2" data-toggle="tab" role="tab">
                                                <img src="/assets/img/quick-view/s2.jpg" alt="">
                                            </a>
                                            <a href="#modal3" data-toggle="tab" role="tab">
                                                <img src="/assets/img/quick-view/s3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="qwick-view-right">
                                        <div class="qwick-view-content">
                                            <h3 id="name"></h3>
                                            <div class="price">
                                                <p id="price"></p>
                                            </div>
                                            <div class="rating-number">
                                                <div class="quick-view-rating">
                                                    <i class="pe-7s-star"></i>
                                                    <i class="pe-7s-star"></i>
                                                    <i class="pe-7s-star"></i>
                                                    <i class="pe-7s-star"></i>
                                                    <i class="pe-7s-star"></i>
                                                </div>
                                                <div class="quick-view-number">
                                                    <span>2 Ratting (S)</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et
                                                dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                            <div class="quick-view-select">
                                                <div class="select-option-part">
                                                    <label>Size*</label>
                                                    <select class="select">
                                                        <option value="">- Please Select -</option>
                                                        <option value="">900</option>
                                                        <option value="">700</option>
                                                    </select>
                                                </div>
                                                <div class="select-option-part">
                                                    <label>Color*</label>
                                                    <select class="select">
                                                        <option value="">- Please Select -</option>
                                                        <option value="">orange</option>
                                                        <option value="">pink</option>
                                                        <option value="">yellow</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="quickview-plus-minus">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                                <div class="quickview-btn-cart">
                                                    <a class="btn-hover-black" href="#">add to cart</a>
                                                </div>
                                                <div class="quickview-btn-wishlist">
                                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  --}}
                @endforeach
            </div>
        </div>
    </div> 
</div>
