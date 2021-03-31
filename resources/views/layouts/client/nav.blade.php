<div class="pl-200 pr-200 overflow clearfix">
    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading" >
                <h3> All Service <i class="pe-7s-angle-down"></i></h3>
            </div>
            <div class="category-menu-list">
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="/">{{$category->name}}<i class="pe-7s-angle-right"></i></a>

                            @php
                                $sub = App\ProductCategory::where('animal_category_id', $category->id)->get();
                            @endphp

                            @if($sub->isNotEmpty())
                                <div class="category-menu-dropdown">

                                    @foreach ($sub as $child)
                                        <div class="category-dropdown-style category-common3">
                                            <h4 class="categories-subtitle">
                                                <a href="/">
                                                    {{$child->name}}
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
                            <a href="#">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="slider-area">
                <div class="slider-active owl-carousel" style="background-color: #000000; height: 550px;">
                    @foreach($products as $product)
                        <div class="single-slider single-slider-hm3 p-5">
                            <div class="row" style="">
                                <div class="col-md-8">
                                    <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                        <h2 class="animated">{{ $product->name }}<br>{{$product->supplier->name}}</h2>
                                        <h4 class="animated">{{$product->description}}</h4>
                                        <a class="electro-slider-btn btn-hover" href="{{ route('home.show', $product) }}">Buy Now</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="/storage/Image/product/{{ $product->img }}" alt="{{ $product->name }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
