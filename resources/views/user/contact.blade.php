@extends('layouts.client.appWithoutCategory')

@section('head')
    <!--CSS for COntact-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        .maps iframe{
            width: 100%;
            height: 500px;
        }
    </style>
@endsection

<!--Content COntact us-->
@section('content')
	<div class="container-contact100">
		<div class="contact100-map" id="" style="background: url('https://wallpaperaccess.com/full/1447306.jpg')")>
        
        </div>

		<button class="contact100-btn-show">
			<i class="far fa-envelope" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>
            <div class="col-6 maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4305403702365!2d106.6787936500889!3d10.77829979228258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f26169f8e3b%3A0x2fe71a17739a5d70!2zMSBDw6FjaCBN4bqhbmcgVGjDoW5nIFTDoW0sIFBoxrDhu51uZyAxMCwgUXXhuq1uIDMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1618631101784!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-6">
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
					<input class="input100" type="text" name="email" placeholder="Enter your email">
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
            </div>  

			<span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+11 (019) 2518 4203</span><br>
                <i class="fas fa-phone-alt"></i> +11 (251) 2223 3353<br>
                <i class="fa fa-envelope mt-3"></i> petme@domain.info<br>
                <i class="fas fa-globe mt-3"></i> 1 Cách Mạng Tháng 8, D.3 Ho Chi Minh - Vietnam<br>
			</span>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
@endsection


@section('script')
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
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
@endsection

