@extends('layouts.client.appWithoutCategory');
@section('content')
<div class="jumbotron text-center">
     <h1 class="display-3">Thank You!</h1>
     <p class="lead"><strong>Please check your Order </strong> for checking status of Delivery</p>
     <hr>
     <p>
       Having trouble? <a href="">Contact us</a>
     </p>
     <p class="lead">
       <a class="btn btn-primary btn-sm" href="{{ route('home') }}" role="button">Continue Shopping</a>
     </p>
   </div>
@endsection