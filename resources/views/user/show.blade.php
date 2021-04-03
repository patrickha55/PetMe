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
                                    {{ \Illuminate\Support\Facades\Auth::user()->userName }} <span class="caret"></span>
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
                    <li><a href="/contact">contact</a></li>
                </ul>
            </nav>
        </div>

    </div>
    <!--Content-->
    <div class="container mt-100 mb-100">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="/storage/Image/product/noimage.jpg" alt="" class="rounded-circle" height="200px" >
                    </div>
                    <div class="col-12 m-3">
                        <div class="py-3 pb-4 border-bottom">
                            <button type="submit" class="btn-secondary border button">Change Avatar</button>
                            <a href="{{ route('user.edit', $user) }}">
                                <button type="submit" class="btn-secondary border button">Edit Profile</button>
                            </a>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="" id="deactivate">
                            <div class="ml-auto">
                                <a href="{{ route('user.editPassword') }}"><button class="button border danger">Change Password</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-8 bg-white mt-sm-5">
                <h4 class="pb-4  font-weight-bold border-bottom-1">Personal Information</h4>
                @if (session('status'))
                    <p class="text-success font-weight-bolder">
                        {{ session('status') }}
                    </p>
                @endif
                {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                    <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                        <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                    </div>
                </div> --}}
                <div class="row font-weight-bold h6">
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3"  >
                        First Name :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3" >
                        {{ $user->firstName }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3" >
                        Last Name :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3" >
                        {{ $user->lastName }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Username :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->userName }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Email :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->email }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3" >
                        Birthday :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->dob }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Gender :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->gender }}
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3" >
                        Phone Number :
                    </div>
                    <div class="col-md-8 border-bottom-1 mt-3 mb-3">
                        {{ $user->phoneNumber }}
                    </div>
                </div>
                <h4 class="pb-4  font-weight-bold border-bottom-1">Address</h4>
                @if ($user->address != null)
                    <div class="row font-weight-bold h6">
                        <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                            Address :
                        </div>
                        <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                            {{ $user->address->address }}
                        </div>
                        <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                            Ward :
                        </div>
                        <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                            {{ $user->address->ward }}
                        </div>
                        <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                            District :
                        </div>
                        <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                            {{ $user->address->district }}
                        </div>
                        <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                            City :
                        </div>
                        <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                            {{ $user->address->city }}
                        </div>
                    </div>
                @else
                    <div class="row font-weight-bold h6">
                        <a href="#" title="Quick View" data-toggle="modal" data-target="#addressModal">
                            <button class="btn-secondary  button">Add a new Address</button>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{--Modal--}}
    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-content">
                        <h3>New Address</h3>
                        <form action="{{ route('address.store') }}" method="post" class="row">
                            @csrf
                            <div class="form-group col-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') border-red-500 @enderror" name="address" id="address" placeholder="Address">
                                @error('address')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="ward">Ward</label>
                                <input type="number" class="form-control @error('ward') border-red-500 @enderror" id="ward" name="ward">
                                @error('ward')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="district">District</label>
                                <input type="text" class="form-control @error('district') border-red-500 @enderror" id="district" name="district">
                                @error('district')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control @error('city') border-red-500 @enderror" id="city" name="city">
                                @error('city')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-dark rounded">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
