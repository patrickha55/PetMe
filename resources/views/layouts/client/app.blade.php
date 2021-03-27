<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
{{-- tailwind --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

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
    
   
</head>
<body>
    <div id="app">
        @include('layouts.client.includes.client.navbar')

        <main class="py-4" style=" min-height: 60vh">
            @yield('content')
        </main>

        @include('layouts.client.includes.client.footer')
    </div>
</body>
</html>
