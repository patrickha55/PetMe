
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
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #fff; 
}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 600px;
    background: url('https://wallpapercave.com/wp/wp2446975.jpg');
}

h4 {
    letter-spacing: -1px;
    font-weight: 400
}

.img {
    width: 70px;
    height: 70px;
    border-radius: 6px;
    object-fit: cover
}

#img-section p,
#deactivate p {
    font-size: 12px;
    color: #777;
    margin-bottom: 10px;
    text-align: justify
}

#img-section b,
#img-section button,
#deactivate b {
    font-size: 14px
}

label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #777;
    padding-left: 3px
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}

select {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 10px;
    height: 40px;
    padding: 5px 10px
}

select:focus {
    outline: none
}

.button {
    background-color: #fff;
    color: #0779e4
}

.button:hover {
    background-color: #0779e4;
    color: #fff
}

.btn-primary {
    background-color: #0779e4
}

.danger {
    background-color: #fff;
    color: #e20404;
    border: 1px solid #ddd
}

.danger:hover {
    background-color: #e20404;
    color: #fff
}

.span-star {
    color: red;
}

@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
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
                    <p class="font-weight-bold font-italic h1" style="color: #FF2C2C">PetMe</p>
                </a>
            </div>        
        </div>
    </div>
</header>
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
<!--Content-->
<div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom font-weight-bold">CHANGE PASSWORD</h4>
    {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
        </div>
    </div> --}}
    <div class="py-2">
        <div class="row py-2">
            <div class="col-md-12"> <label for="currpassword">Current Password<span class="span-star">*<span></label> <input type="password" class="bg-light form-control" placeholder="" required> </div>
           
        </div>
        <div class="row py-2">
            <div class="col-md-12"> <label for="newpassword">New Password<span class="span-star">*<span></label> <input type="password" class="bg-light form-control" placeholder="" required> </div>
            
        </div>
        <div class="row py-2">
            <div class="col-md-12"> <label for="cfpassword">Confirm Password<span class="span-star">*<span></label> <input type="password" class="bg-light form-control" placeholder="" required> </div>
            
        </div>
        <div class="py-3 pb-4 border-bottom"> 
            <button type="submit" class="btn-secondary border button">Save Changes</button> 
            <button class="border button">Cancel</button> 
        </div>
    </div>
</div>
<!--End Content-->
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