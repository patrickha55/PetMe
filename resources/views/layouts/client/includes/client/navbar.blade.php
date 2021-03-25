
<section class="menu">
  <nav class="navbar navigation">
    <div class="container">
      <!-- Navbar Links -->
      <div id="navbar" class="navbar-collapse collapse text-center">
        <a href="index.html" class="navbar-brand" id="navbar-menu-brand">A1 Uniform</a>
        <ul class="nav navbar-nav">
          <!-- Home -->
          <li class="dropdown">
            <a href="index.html">Home</a>
          </li>

          <!--Product-->
          <li class="dropdown dropdown-slide">
            <a href="">Product <span class="tf-ion-ios-arrow-down"></span></a>
            <div class="dropdown-menu">
                <!-- Primary School -->
                  <ul>
                    <p>
                      <a href="cat-primary.html" class="menu-lv1">Dog</a>
                    </p>
                    <li role="separator" class="divider"></li>
                    <p>
                      <a href="cat-primary.html" class="menu-lv1">Cat</a>
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
                      <a href="cat-primary.html" class="menu-lv1">Log Out</a>
                    </p>
                    <li role="separator" class="divider"></li>
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