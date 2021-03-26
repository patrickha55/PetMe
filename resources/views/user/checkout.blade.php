@extends('layouts.client.app')
@section('content')
<body id="body">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Checkout</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/viewcart')}}">View Cart</a></li>
                            <li class="active">checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="checkout shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="block billing-details">
                            <h4 class="widget-title">Billing Details</h4>
                            <form class="checkout-form">
                                <div class="form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" placeholder=""><span id="errfullname" class="errmsg"></span>
                                </div>
                                <div class="form-group">
                                    <label for="user_address">Address</label>
                                    <input type="text" class="form-control" id="user_address" placeholder="" required>
                                </div>
                                <div class="checkout-country-code clearfix">
                                    <div class="form-group">
                                        <label for="user_post_code">Zip Code</label>
                                        <input type="text" class="form-control" id="user_post_code" name="zipcode" value=""><span id="errzipcode" class="errmsg"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_city">City</label>
                                        <input type="text" class="form-control" id="user_city" name="city" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_country">Phone</label>
                                    <input type="text" class="form-control" id="user_country" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="block">
                            <form class="checkout-form" action='' onsubmit="return validateform()">
                            <h4 class="widget-title">Payment Method</h4>
                            <input class="" type="radio" checked> Cash on Delivery<br><br>
                            <button type="submit" id="submit-btn" value="submit" class="btn btn-main mt-20">Place Order</button>
                            </form>                         
                        </div>                                                   
                    </div>
                    <div class="col-md-4">
                        <div class="product-checkout-details">
                            <div class="block">
                                <h4 class="widget-title">Order Summary</h4>
                                <input type="radio" checked> Standard Delivery (3-5 days working)<hr>
                                <div class="checkOut-list">
                                </div>
                                <hr>
                                <div class="summary-total">
                                    <span>Total</span>
                                    <span class="total-price"></span>
                                </div>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
 	<!-- Modal -->
	{{-- <div class="modal product-modal fade" id="alertModal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog animate__animated animate__backInDown " role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="block text-center">
							<i class="tf-ion-ios-cart-outline" style="font-size: 50px;"></i>
							<h2 class="text-center">Your cart is currently empty.</h2>
							<a href="all-products.html" class="btn btn-solid-border mt-20 timeCount">Return to shop ( 5 )</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}


	
    <!-- Star Validatescript By Thach -->
    <script>
        //    messege
        let errfullname = document.getElementById('errfullname');
        let errcardcode = document.getElementById('errcardcode');
        let errcardnumber = document.getElementById('errcardnumber');
        let errexp = document.getElementById('errexp');
        let errzipcode = document.getElementById('errzipcode');
        // selector
        let submit = document.getElementById('submit-btn');
        let fullname = document.getElementById('full_name');
        let zipcode = document.getElementById('user_post_code');
        let user_address = document.getElementById('user_address');
        let creditcard = document.getElementById('card-number');
        let expcard = document.getElementById('card-expiry');
        let cardcvc = document.getElementById('card-cvc');
        //  regular expression
        let reg_zip = /\d{5,9}/;
        let reg_fullname = /[a-zA-Z]{3,}\s|[a-zA-Z]{2,}/;
        let reg_creditcard = /[0-9]{16}/;
        let reg_expcard = /(0[1-9]|1[0-2])\/?(([0-9]{4})|[0-9]{2}$)/;
        let reg_cardcvc = /\d{3}/;

        function checkCardcvc() {
            if (reg_cardcvc.test(cardcvc.value) === false) {
                cardcvc.classList.add('errinput');
                errcardcode.innerHTML = 'must be 3 digitals';
                return false;
            } else {
                cardcvc.classList.remove('errinput');
                errcardcode.innerHTML = '';
                return true;
            }
        }

        function checkExpcard() {
            if (reg_expcard.test(expcard.value) === false) {
                expcard.classList.add('errinput');
                errexp.innerHTML = 'Expired Day form with XX is Month , YY is Year';
                return false;
            } else {
                expcard.classList.remove('errinput');
                errexp.innerHTML = '';
                return true;
            }
        }

        function checkFullname() {
            if (reg_fullname.test(fullname.value) === false) {
                fullname.classList.add('errinput');
                errfullname.innerHTML = 'Fullname must be 3-15 characters';
                return false;
            } else {
                fullname.classList.remove('errinput');
                errfullname.innerHTML = '';
                return true;
            }
        }

        function checkZipcode() {
            if (reg_zip.test(zipcode.value) === false) {
                zipcode.classList.add('errinput');
                errzipcode.innerHTML = 'Zip code must be 5-9 digitals';
                return false;
            } else {
                zipcode.classList.remove('errinput');
                errzipcode.innerHTML = '';
                return true;
            }
        }

        function checkCreditcard() {
            if (reg_creditcard.test(creditcard.value) === false) {
                creditcard.classList.add('errinput');
                errcardnumber.innerHTML = 'Card Number must be 16 digitals';
                return false;
            } else {
                creditcard.classList.remove('errinput');
                errcardnumber.innerHTML = '';
                return true;
            }
        }


        function validateform() {
            var c = false;
            if (checkFullname()) {
                if (checkZipcode()) {
                    if (checkCreditcard()) {
                        if (checkExpcard()) {
                            if (checkCardcvc()) {
                                c = true;
                            }
                        }

                    }
                }
            }
            return c;
        };
    </script>
    <!-- End-validateform By Thach-->
<!-- Essential Scripts =====================================-->
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