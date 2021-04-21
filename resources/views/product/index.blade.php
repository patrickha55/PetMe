@extends('layouts.client.appWithoutCategory')

@section('style')
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


<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
    {{-- {{  $selectedProducts}} --}}
    <div class="container-fluid">
        <div class="h4 section-title-4 border-bottom-1 pb-15 font-weight-light">
            <a href="">Products</a>
        </div>
        @if (session('status'))
            <div class="alert alert-success" id="statusSession">
                {{ session('status') }}
            </div>
        @endif
        <div class="section-title-4 text-center mb-40">
            <h2>Products</h2>
        </div>
  
  {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <div class="row">
            <div class="dropdown col-sm-3">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <article class="card-group-item">
                        <header class="card-header" style="background: #2B2B2B";>
                            <h6 class="title font-weight-bold" style="color: #fff;">Range input </h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Min</label>
                                <input wire:model='minPrice'  type="number" class="form-control" id="inputEmail4" placeholder="$0">
                            </div>
                            <div class="form-group col-md-6 text-right">
                                <label>Max</label>
                                <input wire:model='maxPrice'  type="number" class="form-control" placeholder="$1,0000">
                            </div>
                            </div>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header" style="background: #2B2B2B">
                            <h6 class="title font-weight-bold" style="color: #fff;">Selection </h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <div class="custom-control custom-checkbox">
                                    <span class="float-right badge badge-light round">52</span>
                                        <input type="checkbox" class="custom-control-input" id="Check1">
                                        <label class="custom-control-label" for="Check1">Top Star</label>
                                </div> <!-- form-check.// -->

                                <div class="custom-control custom-checkbox">
                                    <span class="float-right badge badge-light round">132</span>
                                        <input type="checkbox" class="custom-control-input" id="Check2">
                                    <label class="custom-control-label" for="Check2">Popular</label>
                                    </div> <!-- card-body.// -->

                            @php
                            $count =0;
                        $box ='box';
                        @endphp 
                            @foreach($categories as $cat)
                        
                        
                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">{{ $cat->products->count() }}</span>
                                @php $count+=1 ; 
                                $box = $box.$count ;
                                @endphp
                            
                                <input   value='{{ $cat->id }}' wire:model='{{$box  }}'   type="checkbox" class="custom-control-input" id="{{ $count }}">
                                    <label class="custom-control-label" for="{{ $count }}".$count>{{ $cat->name }}</label>
                                
                            </div> <!-- form-check.// -->
                            @endforeach 
                        </div>
                    </article> <!-- card-group-item.// -->
                </div> <!-- card.// -->
            </div>
            <div class="top-product-style col-sm-9">
                <div>
                    <div id="electro1">
                        <div class="custom-row-2 shadow p-3 mb-5 bg-white rounded row">
                            @foreach($products as $product)
                                <div class="custom-col-style-2 col-3">
                                    <div class="product-wrapper product-border mb-24">
                                        <div class="product-img-3">
                                            <a href="{{route('home.show', $product)}}">
                                                @if(!empty($product->img))
                                                <img src="/storage/Image/product/{{ $product->img }}" alt="">
                                                @else
                                                    <img src="/storage/Image/product/noimage.jpg" alt="">
                                                @endif
                                            </a>
                                            <div class="product-action-right productButton">
                                                <a class="animate-right" href="{{route('home.show', $product)}}" title="View">
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
                                                <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product)}}">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                
                                                {{-- Neu user da thich thi hien trai tim mau den, bam vao de xoa product khoi wishlist --}}        
            
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
                                        <div class="product-content-4 text-center">
                                            <div class="product-rating-4">
                                                @php
                                                    $rating = \App\ProductReview::where([
                                                        'product_id' => $product->id,
                                                        'status' => 'approved'
                                                    ])->avg('rating');
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
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $products->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>   

  
@endsection

                
 

{{-- Test hidden form --}}

@section('script')
    {{-- <script type='text/javascript'>
        let products = {!! json_encode($products, JSON_HEX_TAG) !!};

        let a = 'ab';

        for(let i=1; i<=products.data.length + 1; i++){
            $('.productButton').ready(function(){
                $('#removeWishlist' + i).click(function(){
                    $('#wishlistHidden' + i).click();
                });
            });
        }
    </script> --}}
    <script>
          $( "#statusSession" ).fadeIn( 500 ).delay( 2000 ).fadeOut( 500 );
    </script>
@endsection
