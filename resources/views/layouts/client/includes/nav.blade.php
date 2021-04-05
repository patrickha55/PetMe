<div class="pl-200 pr-200 overflow clearfix">
    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading" >
                <h3><a href="{{ route('products') }}">Products</a>  <i class="pe-7s-angle-down"></i></h3>
            </div>
            <div class="category-menu-list">
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ route('home.showFilterAnimalProducts', $category) }}">{{$category->name}}<i class="pe-7s-angle-right"></i></a>

                            @php
                                $product_categories = App\ProductCategory::where('animal_category_id', $category->id)->get();
                            @endphp

                            @if($product_categories->isNotEmpty())
                                <div class="category-menu-dropdown">
                                    @foreach ($product_categories as $product_category)
                                        <div class="category-dropdown-style">
                                            <h4 class="categories-subtitle">
                                                <a href=" {{ route('home.showFilterProducts', $product_category) }}">
                                                    {{$product_category->name}}
                                                </a>
                                            </h4>
                                            {{-- @php
                                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                                <ul>
                                                    @foreach ($grandChild as $c)
                                                        <li><a href="{{route('/', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif --}}
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="menu-slider-wrapper">
            <div class="menu-style-3 menu-hover text-center">
                <nav>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">home </a>
                        </li>
                        <li>
                            <a href="{{url('/about')}}">about us</a>
                        </li>
                        <li>
                            <a href="#">product</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact')}}">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="slider-area">
                <div class="slider-active owl-carousel" style="background-color: #fff; height: 550px; border: 1px solid black;">
                     {{-- @foreach($products as $product)
                        <div class="single-slider single-slider-hm3 p-5"  style="background-color: #fff;">
                            <div class="row">
                                <div class="col-md-8"  style=" color: black;">
                                    <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                        <h2 class="animated" style="font-size: 40px; color: black;">{{ $product->name }}<br>{{$product->supplier->name}}</h2>
                                        <h4 class="animated" style="color: black;">{{$product->description}}</h4>
                                        <a class="electro-slider-btn btn-hover" href="{{ route('home.show', $product) }}">Buy Now</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="/storage/Image/product/{{ $product->img }}" alt="{{ $product->name }}" style="margin-left: 30px; height:auto; width: 200px;">
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</div>
