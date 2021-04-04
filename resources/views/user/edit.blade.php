<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
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
            height: 47px;
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

        @media(max-width:576px) {
            .wrapper {
                padding: 25px 20px
            }

            #deactivate {
                line-height: 18px
            }
        }
    </style>
</head>
<body>
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
                        <li><a href="/wishlist"><i class="pe-7s-like"></i>Wishlist</a></li>
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
                                    {{ auth()->user()->userName }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('user.show', auth()->user()) }}">
                                            Profile
                                        </a>
                                    </div>
                                    <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">
                                            Orders
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
                        <p class="font-weight-bold font-italic h1" style="color: #ff2c2c;">PetMe</p>
                    </a>
                </div>
                <div class="categories-search-wrapper">

                    <div class="categories-wrapper">
                        <form action="/" method="GET">
                            <input name="query" placeholder="Enter Your key word" type="text">
                            <button type="submit"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper">
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href=""><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="/">My Cart <br>

                                @auth
                                    {{Cart::session(auth()->id())->getContent()->count()}}
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
        <h4 class="pb-4 border-bottom-1 font-weight-bold">MY PROFILE</h4>
        {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
            </div>
        </div> --}}
        <form action="{{ route('user.update', $user) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" class="bg-light form-control" value="{{ $user->firstName }}">
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="bg-light form-control" value="{{ $user->lastName }}">
                    </div>
                </div>
                <div class="row py-2 form-group">
                    <div class="col-md-6">
                        <p>Gender</p>
                        <div class="row">
                            @if ($user->gender == 'M')
                                <label class="col-6">
                                    <input class="w-75" type="radio" name="gender" value="M" checked>
                                    <span> Male </span>
                                </label>
                                <label class="col-6">
                                    <input class="w-50" type="radio" name="gender" value="F">
                                    <span>Female </span>
                                </label>
                            @else
                                <label class="col-6">
                                    <input class="w-75" type="radio" name="gender" value="M" >
                                    <span> Male </span>
                                </label>
                                <label class="col-6">
                                    <input class="w-50" type="radio" name="gender" value="F" checked>
                                    <span>Female </span>
                                </label>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="dob">Day of Birth</label>
                        <input type="date" id="dob" name="dob" class="bg-light form-control" value="{{ $user->dob }}">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6">
                        <label for="userName">Username</label>
                        <input type="text" id="userName" name="userName" class="bg-light form-control" value="{{ $user->userName }}">
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="bg-light form-control" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="phoneNumber">Phone</label>
                        <input type="text" id="phoneNumber" name="phoneNumber" class="bg-light form-control" value="{{ $user->phoneNumber }}">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12">
                        <h4 class="pb-4 border-bottom-1 font-weight-bold">My Address</h4>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="bg-light form-control" value="{{ $user->address->address }}">
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="ward">Ward</label>
                        <input type="text" id="ward" name="ward" class="bg-light form-control" value="{{ $user->address->ward }}">
                    </div>
                </div>
                <div class="row py-2 mb-10">
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="district">District</label>
                        <input type="text" id="district" name="district" class="bg-light form-control" value="{{ $user->address->district }}">
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" value="{{ $user->address->city }}">
                    </div>
                </div>
                <div class="py-3 pb-4 border-top-1 row">
                    <div class="col-5">
                        <button type="submit" class="btn-secondary border button">Save Changes</button>
                    </div>
                    <div class="col-3">
                        <a class=" border button" href="{{ route('user.show', $user) }}">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--End Content-->
    @include('layouts.client.includes.footer')
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
