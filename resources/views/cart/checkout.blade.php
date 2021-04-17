@extends('layouts.client.appWithoutCategory')

@section('content')

@php
 $user = auth()->user();
 $firstName = auth()->user()->firstName ;
 $lastName = auth()->user()->lastName ;
 $phoneNumber = auth()->user()->phoneNumber ;
@endphp
<div class="mt-50">
    <h1 class="text-center">Checkout</h1>
</div>
<div class="w-75 shadow bg-white rounded p-2 mt-50 mb-100 mx-auto row">
    <div class="col-md-4 pt-3">
        <h4 class="pb-4  font-weight-bold border-bottom-1">{{ $firstName . " " . $lastName }}</h4>

        <div class="row font-weight-bold h6">
            <div class="col-md-4 mt-3 mb-3">
                Phone Number:
            </div>
            <div class="col-md-8 mt-3 mb-3">
                {{ $phoneNumber }}
            </div>
        </div>
    </div>
    <div class="col-md-8 pt-3">
        <h4 class="pb-4  font-weight-bold border-bottom-1">Delivery Address</h4>

        @if ($user->address != null)
            <div class="row font-weight-bold h6">
                <div class="col-md-2 mt-3 mb-3">
                    Address:
                </div>
                <div class="col-md-4 mt-3 mb-3">
                    {{ $user->address->address }}
                </div>
                <div class="col-md-2 mt-3 mb-3">
                    Ward :
                </div>
                <div class="col-md-4 mt-3 mb-3">
                    {{ $user->address->ward }}
                </div>
                <div class="col-md-2 mt-3 mb-3">
                    District :
                </div>
                <div class="col-md-4 mt-3 mb-3">
                    {{ $user->address->district }}
                </div>
                <div class="col-md-2 mt-3 mb-3">
                    City :
                </div>
                <div class="col-md-4 mt-3 mb-3">
                    {{ $user->address->city }}
                </div>
            </div>
        @endif
    </div>
    <div class="col-12 mb-100 mr-auto ml-auto">
        <div class="summery-box" style="border:1px solid #535353;padding:20px;">
            <h4 class="pb-4  font-weight-bold">Order Summery</h4>
           <table class="table">
               <thead class="h6">
                   <tr>
                       <th>Name</th>
                       <th>Quantity</th>
                       <th>Price</th>
                       <th>Total</th>
                   </tr>
               </thead>
               <tbody>
              @foreach($cartItems as $item)
                <tr>
                       <td scope="row">
                           <p>{{ $item->name }}</p>
                       </td>
                        <td><p>{{ $item->quantity }}</p></td>
                        <td><p>@currency($item->price)</p></td>
                        <td><p>@currency($item->getPriceSum())</p></td>
                   </tr>
              @endforeach
           </table>


            <div class="border-top my-auto">
                <ul class="list-unstyled h5">
                <li class="d-flex justify-content-between my-2">
                    <span class="tag">Subtotal</span>
                    <span class="val">VNĐ</span>
                </li>
                <li class="d-flex justify-content-between mb-2">
                    <span class="tag">Shipping</span>
                    <span class="val">0 VNĐ</span>
                </li>
                
                <li class="d-flex justify-content-between ">
                    <span class="tag">Total</span>
                    <span class="val">@currency($total) VNĐ</span>
                  </li>
                </ul>
            </div>
    
        </div>
        <form action="{{ route('order.store') }}" method="POST">
            @csrf 
            <button type="submit"   class="btn btn-success px-4 py-10 rounded mt-5 ml-150">Order</button> 
        </form>
    </div>
</div>
@endsection
