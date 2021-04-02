
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <!-- all css here -->
 <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
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

 <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
<style>
    .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
}

    .social-link:hover,
    .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #555;
}

.bg_image {
  font-family: "Poppins, sans-serif";
}
</style>
<header>
    {{--@if(auth()->check())
      <h1>{{   auth()->user()->userName }}</h1>
    @else
  <h2>vui long dang nhap</h2>--}}{{--
  @endif--}}
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
                    <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i
                                class="pe-7s-repeat"></i>Compare</a></li>
                    <li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li>
                    {{-- <li><a href="#"><i class="pe-7s-flag"></i>US</a></li> --}}
                    {{-- <li><a class="border-none" href="#"><span>$</span>USD</a></li> --}}

                    <li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ '/logout' }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom pt-10 pb-30 clearfix">
        <div class="header-bottom-wrapper pr-200 pl-200">
            <div class="logo-3">
                <a href="{{route('home')}}">
{{--                        <img src="/assets/img/logo/logo-3.png" alt="pet me logo">--}}
                    <p class="font-weight-bold font-italic h1">PetMe</p>
                </a>
            </div>        
        </div>
    </div>
</header>
  
  <div class="bg-light align-items-center">
    <div>
        <div class="menu-style-3 menu-hover text-center">
            <nav>
                <ul>
                    <li><a href="{{url('/')}}">home </a></li>
                    <li><a href="{{url('/about')}}">about us</a></li>
                    <li><a href="#">product</a></li>
                    <li><a href="#  ">contact</a></li>
                </ul>
            </nav>
        </div>
  
    </div>
    <div class="bg_image container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h2 class="display-4" style="font-weight: bold;">PETME</h2>
          <p class="text-muted mb-4">Petme is a company specializes in pets wellness. Their mission is to bring the best quality products they can offer with the most competitive prices. Founded just recently with a few stores and limited fund, they struggle to bring their brand to the public. </p>
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img src="https://img1.goodfon.com/wallpaper/nbig/0/b8/zhivotnye-koty-sobaki.jpg" alt="" class="img-fluid"></div>
      </div>
    </div>
  </div>
  
  <div class="bg-white py-5">
    <div class="container py-5">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
          <h3 class="font-weight-bold">HILL’S PET NUTRITION:</h3>
          <h4 class="font-weight-bold">PREMIUM PET FOOD BACKED BY SCIENCE</h4>
          <p class="text-muted mb-4">From their days as puppies and kittens to their years as senior dogs and cats, our biology-based nutrition stays a step ahead for differences you can see, feel and trust.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://www.hillspet.com.au/content/dam/cp-sites/hills/hills-pet/en_au/general/heros/hero-pack-lockup.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/happy-and-cheerful-dog-playing-fetch-with-toy-bone-royalty-free-image-1590068781.jpg?crop=0.668xw:1.00xh;0,0&resize=640:*" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h3 class="font-weight-bold">ENSURE SAFETY</h3>
          <p class="text-muted mb-4">Many factors contribute to the safety or danger of a toy, and a number of them depend upon your dog's size, activity level and preferences. Another thing to consider is the environment where your dog spends their time.</p>
          <p class="text-muted mb-4">Be sure to buy toys of appropriate size for your dog. Toys that are too small can easily be swallowed or become lodged in your dog's throat.</p>
          <a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-light py-5">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-5">
          <h2 class="display-4 font-weight-bold">Our team</h2>
          {{-- <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
        </div>
      </div>
  
      <div class="row text-center">
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          </div>
        </div>
        <!-- End-->
  
      </div>
    </div>
  </div>
  <footer class="footer-area">
    <div class="footer-top-3 black-bg pt-75 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xl-4">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-widget-title-3">Contact Us</h3>
                        <div class="footer-info-wrapper-2">
                            <div class="footer-address-electro">
                                <div class="footer-info-icon2">
                                    <span>Address: </span>
                                </div>
                                <div class="footer-info-content2">
                                    <p>1 Cách Mạng Tháng 8, D.3
                                        <br>Ho Chi Minh - Vietnam</p>
                                </div>
                            </div>
                            <div class="footer-address-electro">
                                <div class="footer-info-icon2">
                                    <span>Phone:</span>
                                </div>
                                <div class="footer-info-content2">
                                    <p>+11 (019) 2518 4203
                                        <br>+11 (251) 2223 3353</p>
                                </div>
                            </div>
                            <div class="footer-address-electro">
                                <div class="footer-info-icon2">
                                    <span>Email:</span>
                                </div>
                                <div class="footer-info-content2">
                                    <p><a href="#">petme@mail.com</a>
                                        <br><a href="#">petme@domain.info</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-widget-title-3">My Account</h3>
                        <div class="footer-widget-content-3">
                            <ul>
                                @guest
                                    <li><a href="/login">Login Here</a></li >
                                    <li><a href="register.html">Register</a></li>
                                @endguest
                                <li><a href="cart.html">Profile</a></li>
                                <li><a href="checkout.html"> Cart</a></li>
                                <li><a href="shop.html">Orders</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-widget-title-3">Information</h3>
                        <div class="footer-widget-content-3">
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Our Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle black-bg-2 pt-35 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-6" >
                    <div class="footer-services-wrapper mb-30" style="text-align: center;">
                        <div class="footer-services-icon">
                            <i class="pe-7s-car"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Free Shipping</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <div class="footer-services-wrapper mb-30">
                        <div class="footer-services-icon">
                            <i class="pe-7s-headphones"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Online Support</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom  black-bg pt-25 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="footer-menu">
                        <nav>
                            <ul>
                                <li><a href="#">Privacy Policy </a></li>
                                {{--                                    <li><a href="blog.html"> Blog</a></li>--}}
                                <li><a href="#">Help Center</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> by
                        <a href="/" target="_blank">Group - 4</a> .
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



