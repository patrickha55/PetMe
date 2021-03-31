@extends('layouts.client.front')


@section('content')
<div class="container">
<h2>Checkout</h2>


<h3>Shipping Information</h3>

<form action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Ward</label>
        <input type="text" name="ward" id="" class="form-control">
    </div>

    <div class="form-group">
     <label for="">District</label>
     <input type="text" name="district" id="" class="form-control">
 </div>
    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="city" id="" class="form-control">
    </div>

    {{-- <div class="form-group">
        <label for="">Zip</label>
        <input type="number" name="shipping_zipcode" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Full Address</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div> --}}

    <h4>Payment option</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" checked class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            Cash on delivery

        </label>

    </div>

    {{-- <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div> --}}


    <button type="submit" class="btn btn-primary mt-3">Place Order</button>


</form>
</div>

@endsection
