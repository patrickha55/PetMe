<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!--Product-->
    	<!-- Mobile Specific Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <!-- Themefisher Icon font -->
	<link rel="stylesheet" href="{{asset('/css/customer/plugins/themefisher-font/style.css')}}" />
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{asset('/css/customer/plugins/bootstrap/css/bootstrap.min.css')}}" />
	<!-- font awesome -->
	<link rel="stylesheet" href="{{asset('/css/customer/plugins/fontawesome/css/all.min.css')}}" />
	<!-- navbar mobile -->
	<link rel="stylesheet" href="{{asset('/css/customer/plugins/multi-level-dropdown-vegas-nav/dist/css/vgnav.css')}}" />
	<link rel="stylesheet" href="{{asset('/css/customer/plugins/multi-level-dropdown-vegas-nav/dist/css/vgnav-theme.css')}}" />
	<!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('/css/customer/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/customer/product.css')}}">
    
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: url('https://wallpapercave.com/wp/wp2446975.jpg');
        }
        .user_card {
            height: 400px;
            width: 350px;
            margin-top: auto;
            margin-bottom: auto;
            background: #f39c12;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }
        .brand_logo_container {
            position: absolute;
            height: 170px;
            width: 170px;
            top: -75px;
            border-radius: 50%;
            background: #60a3bc;
            padding: 10px;
            text-align: center;
        }
        .brand_logo {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }
        .form_container {
            margin-top: 100px;
        }
        .login_btn {
            width: 100%;
            background: #c0392b !important;
            color: white !important;
        }
        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .login_container {
            padding: 0 2rem;
        }
        .input-group-text {
            background: #c0392b !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }
        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #c0392b !important;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('layouts.client.includes.client.navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.client.includes.client.footer')
    </div>
</body>
</html>
