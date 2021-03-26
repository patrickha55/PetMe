@extends('layouts.client.app')
@section('content')
<body id="body">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h1 class="page-name">Your Wishlist</h1>
						<ol class="breadcrumb">
							<li><a href="{{('/index')}}">Home</a></li>
                            <li><a href="{{('/editprofile')}}">Profile</a></li>
							<li class="active">wishlist</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- View Wishlist -->
	<div class="page-wrapper block-cart" style="display: none;">
		<div class="cart shopping">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="block">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="empty-cart page-wrapper">
	
	</section>
	<!-- End View Cart -->

    <script src="{{ asset('/css/customer/js/script.js')}}" defer></script>
    <script src="{{ asset('/css/customer/js/script.js')}}"></script>
    <!-- Main jQuery -->
    <script src="{{asset('/css/customer/plugins/jquery/dist/jquery.min.js')}}"></script>
    <!-- navbar mobile js -->
    <script src="{{asset('/css/customer/plugins/multi-level-dropdown-vegas-nav/dist/js/vgnav.js')}}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{asset('/css/customer/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{asset('/css/customer/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{asset('/css/customer/plugins/ekko-lightbox/dist/ekko-lightbox.min.js')}}"></script>
    <!-- Count Down Js -->
    <script src="{{asset('/css/customer/plugins/SyoTimer/build/jquery.syotimer.min.js')}}"></script>
</body>
@endsection