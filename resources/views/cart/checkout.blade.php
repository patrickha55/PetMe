@extends('layouts.client.appWithoutCategory')

@section('content')

<div class="mt-50">
    <h1 class="text-center font-weight-bold col-12 mt-5 mb-5">Checkout</h1>
</div>
<div class="w-75 shadow bg-white rounded p-2 mt-50 mb-100 mx-auto row">
    <div class="col-md-4 pt-3">
        <h4 class="pb-4  font-weight-bold border-bottom-1">{{ $user->firstName . " " . $user->lastName }}</h4>
        <div class="row font-weight-bold h6">
            <div class="col-md-4 mt-3 mb-3">
                Phone Number:
            </div>
            <div class="col-md-8 mt-3 mb-3">
                {{ $user->phoneNumber }}
            </div>
        </div>
    </div>
    <div class="col-md-8 pt-3">
        <h4 class="pb-4 font-weight-bold border-bottom-1">Delivery Address</h4>
        <div class="row font-weight-bold h6 ml-1">
            @if ($user->address != null)
                <div class="row">
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
            @else
                <div class="">
                    <a href="#" title="Add an Address" data-toggle="modal" data-target="#addressModal">
                        <button class="btn-secondary  button">Add an Address</button>
                    </a>
                </div>    
            @endif
        </div>
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
        <div class="text-right">
            <form action="{{ route('order.store') }}" method="POST">
                @csrf 
                @if($user->address == null)
                    <h5 class="mt-5 text-danger font-weight-bold">*Please provide an address to order</h5>
                @elseif($user->phoneNumber == null)
                    <h5 class="mt-5 text-danger font-weight-bold">*Please provide a phone number to order</h5>
                @else
                    <button type="submit"  class="btn px-5 pb-5 pt-3 cursor-pointer btn-success font-weight-bold rounded mt-5">Order</button> 
                @endif    
            </form>
        </div>
    </div>
</div>

{{--Modal--}}

{{-- Address modal --}}

<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-content">
                    <h3>New Address</h3>
                    <form action="{{ route('address.storeInCheckout') }}" method="post" class="row">
                        @csrf
                        <div class="form-group col-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') border-red-500 @enderror" name="address" id="address" placeholder="Address">
                            @error('address')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="ward">Ward</label>
                            <input type="text" class="form-control @error('ward') border-red-500 @enderror" id="ward" name="ward">
                            @error('ward')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="district">District</label>
                            <input type="text" class="form-control @error('district') border-red-500 @enderror" id="district" name="district">
                            @error('district')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control @error('city') border-red-500 @enderror" id="city" name="city">
                            @error('city')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-dark rounded">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
