<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/icofont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <style>
        #statusSession{
            position:absolute;
            bottom:20px;
            right:20px;
            z-index:10;
            }
    </style>

    @livewireStyles

    @yield('style')
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <header>
        <div class="header-top-wrapper-2 border-bottom-2">
            <div class="header-info-wrapper pl-200 pr-200">
                <div class="header-contact-info">
                    <ul>
                        <li><i class="pe-7s-call"></i> +84123456789</li>
                        <li><i class="pe-7s-mail"></i> <a href="#">petme@mail.com</a></li>
                    </ul>
                </div>
                <div class="electronics-login-register">
                    <ul>
                        <li><a {{--data-toggle="modal" data-target="#exampleCompare"--}} href="/compare"><i
                                    class="pe-7s-repeat"></i>Compare</a></li>
                        <li><a href="/wishlist"><i class="pe-7s-like"></i>Wishlist</a></li>
                        {{-- <li><a href="#"><i class="pe-7s-flag"></i>US</a></li> --}}
                        {{-- <li><a class="border-none" href="#"><span>$</span>USD</a></li> --}}

                        <li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (auth()->user()->img != null)
                                        <img src="/storage/Image/user/{{ auth()->user()->img }}" alt="{{ auth()->user()->userName }}" class="rounded-circle" height="30px" width="30px">
                                    @else
                                        <img src="/storage/Image/user/user_default.png" alt="{{ auth()->user()->userName}}" class="rounded-circle" height="30px" width="30px">
                                    @endif
                                    {{ auth()->user()->userName }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('user.show', auth()->user()) }}">
                                            Profile
                                        </a>
                                    </div>
                                    <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('order.index') }}">
                                            Orders
                                        </a>
                                    </div>
                                    <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('review.index') }}">
                                            Reviews
                                        </a>
                                    </div>
                                    <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ '/logout' }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom pt-10 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="logo-3">
                    <a href="{{route('home')}}">
                        {{--<img src="/assets/img/logo/logo-3.png" alt="pet me logo">--}}
                        <h1 class="font-weight-bold font-italic " style="color: #ff2c2c;">PetMe</h1>
                    </a>
                </div>
                {{-- //search --}}

                @livewire('search-product')
                
                {{-- endsearch  --}}
                <div class="trace-cart-wrapper">
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href="{{ route('cart.index') }}"><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="{{ route('cart.index') }}">My Cart <br>

                                @auth
                                {{\Cart::session(auth()->id())->getTotalQuantity()}}
                                @else
                                0
                                @endauth

                                Item</a>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none" style="background-color: #f39c12;">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li>
                                    <a href="{{url('/')}}">HOME</a>
                                </li>
                                <li>
                                    <a href="#"> Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hien thi message cua session --}}

        @if (session('status'))
            <div class="alert alert-success" id="statusSession">
                {{ session('status') }}
            </div>
        @endif
    </header>
    <!-- header end -->

    @include('layouts.client.includes.nav')
    <main>
        <div id="bgcolor">
            @yield('content')
        </div>
    </main>

    @include('layouts.client.includes.footer')
    <!-- modal -->

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
                                    <img src="/storage/Image/product/" alt="" id="object">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="/assets/img/quick-view/l3.jpg" alt="">
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
                            <h3>{{ $product->name }}</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00 </span>
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
    </div> --}}
    <!-- all js here -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/c4201aab66.js" crossorigin="anonymous"></script>
    @livewireScripts
    @yield('script')
    <script>
        $(function(){
            /* $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();

                $("#myProduct tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            }); */

            /* $("header#searchInput").click( function(){
                $("main#bgcolor").css({
                    "backgroud-color": "rgba(0,0,0,0.5)",
                    "z-index": "5"
                });
            }); */

            /* $('#productModal').on('show', function(e) {
            var link     = e.relatedTarget(),
                modal    = $(this),
                object = link.data("object");

            modal.find("#object").val(object);}); */

            // session message

            $( "#statusSession" ).fadeIn( 500 ).delay( 2000 ).fadeOut( 500 );
        });
    </script>
</body>
</html>
