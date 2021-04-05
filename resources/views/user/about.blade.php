@extends('layouts.client.appWithoutCategory')
@section('head')
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
@endsection    
  
@section('content')
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
@endsection



