
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
  
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
      <!--CSS for COntact-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="css/util.css">
        <link rel="stylesheet" href="css/main.css">
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
                                          @if (auth()->user()->img != null)
                                              <img src="{{ auth()->user()->img }}" alt="{{ auth()->user()->name }} image" class="rounded-circle" height="30px">
                                          @else
                                              <img src="/storage/Image/product/noimage.jpg" alt="" class="rounded-circle" height="30px">
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
<!--Content COntact us-->
<body>
	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

			<span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+001 345 6889</span>
			</span>
		</div>
	</div>
	<div id="dropDownSelect1"></div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
<!--End Content COntact us-->
@include('layouts.client.includes.footer')

