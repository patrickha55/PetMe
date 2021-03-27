
<section class="menu">
  <nav class="navbar navigation">
    <div class="container">
      <!-- Navbar Links -->
      <div id="navbar" class="navbar-collapse collapse text-center">
        <a href="index.html" class="navbar-brand" id="navbar-menu-brand"></a>
        <ul class="nav navbar-nav">
          <!-- Home -->
          <li class="dropdown">
            <a href="index.html">Home</a>
          </li>
          <!--Product-->
          <li class="dropdown dropdown-slide">
            <a href="{{url('/index')}}">Product <span class="tf-ion-ios-arrow-down"></span></a>
            <div class="dropdown-menu">
                <!-- Primary School -->
                  <ul>
                    <p>
                      <a href="{{url('/dog')}}" class="menu-lv1">Dog</a>
                    </p>
                    <li role="separator" class="divider"></li>
                    <p>
                      <a href="{{url('/cat')}}" class="menu-lv1">Cat</a>
                    </p>
                    <li role="separator" class="divider"></li>
                  </ul>
              <!-- / .row -->
            </div>
            <!-- / .dropdown-menu -->
          </li>
          <!--Contact-->
          <li class="dropdown">
            <a href="contact.html">Contact</a>
          </li>

          <!--Profile-->
          <li class="dropdown dropdown-slide">
            <a href="">Account<span class="tf-ion-ios-arrow-down"></span></a>
            <div class="dropdown-menu">
                  <ul>
                    <p>
                      <a href="{{url('/editprofile')}}" class="menu-lv1">Profile</a>
                    </p>
                    <li role="separator" class="divider"></li>
                    <p>
                      <a href="{{url('/wishlist')}}" class="menu-lv1">Wishlist</a>
                    </p>
                    <li role="separator" class="divider"></li>
                    <p>
                      <a href="{{url('/viewcart')}}" class="menu-lv1">My Orders</a>
                    </p>
                    <li role="separator" class="divider"></li>
                    <p>
                      <a href="" class="menu-lv1" style="color: red;">Log Out</a>
                    </p>
                  </ul>
              <!-- / .row -->
            </div>
            <!-- / .dropdown-menu -->
          </li>
          <!--Feedback-->
          <li class="dropdown">
            <a href="{{url('/login')}}">Login</a>
          </li>
        </ul>
        <!-- / .nav .navbar-nav -->
      </div>
      <!--/.navbar-collapse -->
    </div>
    <!-- / .container -->
  </nav>
</section>

<div class="navigation mobile-nav">
  <nav class="vg-nav vg-nav-sm">
    <span class="shopping-cart-mobile" data-toggle="modal" data-target="#shopping-cart-modal">
      <span class="cart-count animate__animated animate__heartBeat" style="top: 0; right: 65px; width: 20px; height: 20px;line-height: 20px;"></span>
      <i class="tf-ion-ios-cart" style="font-size: 30px;"></i>
    </span>
    <a href="index.html" class="mobile-nav-brand"></a>
    <ul>
      <h2><a href="{{url('/index')}}">Petme | Ecommerce</a></h2>
      <li><a href="{{url('/home')}}">Home</a></li>
      <li class="dropdown">
        <a href="all-products.html">Products</a>
        <ul class="left">
          <li><a href="all-products.html">Dog</a></li>
          <li><a href="all-products.html">Cat</a></li>
          
        </ul>
      </li>
      <li><a href="contact.html">Contact</a></li>
      <li class="dropdown">
        <a href="">Account</a>
        <ul class="left">
          <li><a href="{{url('/editprofile')}}">Profile</a></li>
          <li><a href="{{url('/viewcart')}}">My orders</a></li>
          <li><a href="all-products.html">Log Out</a></li>        
        </ul>
      </li>
      <li><a href="{{('/login')}}">Login</a></li>
    </ul>
  </nav>
</div>

Carousel>
  <Carousel.Item>
    <img
      className="d-block w-100"
      src="holder.js/800x400?text=First slide&bg=373940"
      alt="First slide"
    />
    <Carousel.Caption>
      <h3>First slide label</h3>
      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
    </Carousel.Caption>
  </Carousel.Item>
  <Carousel.Item>
    <img
      className="d-block w-100"
      src="holder.js/800x400?text=Second slide&bg=282c34"
      alt="Second slide"
    />

    <Carousel.Caption>
      <h3>Second slide label</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </Carousel.Caption>
  </Carousel.Item>
  <Carousel.Item>
    <img
      className="d-block w-100"
      src="holder.js/800x400?text=Third slide&bg=20232a"
      alt="Third slide"
    />

    <Carousel.Caption>
      <h3>Third slide label</h3>
      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
    </Carousel.Caption>
  </Carousel.Item>
</Carousel>