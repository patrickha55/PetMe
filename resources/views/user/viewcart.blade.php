@extends('layouts.client.app')
@section('content')
<body id="body">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h1 class="page-name">Your Shopping Cart</h1>
						<ol class="breadcrumb">
							<li><a href="{{('/index')}}">Home</a></li>
							<li class="active">View Cart</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- View Cart -->
	<div class="page-wrapper block-cart" style="display: none;">
		<div class="cart shopping">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="block">
							<div class="view-cart">
							</div>
							<div class="cart-summary-total">
								<div style="flex: 2;text-align: left;">Total :</div>
								<div class="total-price" style="flex: 4;text-align: right;">$17555</div>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="{{url('/index')}}" class="btn btn-small">Continue Shopping</a></li>
								<li><a href="{{url('/checkout')}}" class="btn btn-small btn-solid-border">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="empty-cart page-wrapper">
	
	</section>
	<!-- ? modal empty cart -->

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