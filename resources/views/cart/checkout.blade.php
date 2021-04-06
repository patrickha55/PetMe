@extends('layouts.client.appWithoutCategory')


@section('content')

@php $user = auth()->user();
 @endphp
   
@php 

 $firstName = auth()->user()->firstName ;
 $lastName = auth()->user()->lastName ;
 $phoneNumber = auth()->user()->phoneNumber ;
@endphp 

<div class="w-75 shadow bg-white rounded p-2 mt-100 mb-100 mr-auto ml-auto row">
<div class="col-md-8">
    <div class="row">
        <div class="col-md-4 p-2 m-auto">
            <div class="row">
                <div class="col-12 text-center">
                    @if ($user->img != null)
                        <img src="storage/Image/avatar/ava1.png" alt="{{ $user->name }} image" class="rounded-circle" height="200px">
                    @else
                        <img src="storage/Image/avatar/ava1.png" alt="" class="rounded-circle" height="200px">
                    @endif
                </div>
                <div class="col-12 text-center">
                    <div class="py-3 pb-4 border-bottom">
                        <button type="submit" class="btn-secondary border button">Change Avatar</button>
                      <form action="{{ route('user.edit',$user) }}" method="get">
                          <button type="submit" class="btn">Edit Information</button>
                      </form>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="" id="deactivate">
                        <div class="ml-auto">
                            <a href="{{ route('user.editPassword') }}"><button class="button border danger">Change Password</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 bg-white mt-sm-5 p-5">
            <h4 class="pb-4  font-weight-bold border-bottom-1">Personal Information</h4>
            @if (session('status'))
                <p class="text-success font-weight-bolder">
                    {{ session('status') }}
                </p>
            @endif
            {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                    <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                </div>
            </div> --}}
            <div class="row font-weight-bold h6">
                <div class="col-md-2 border-bottom-1 mt-3 mb-3"  >
                    First Name:
                </div>
                <div class="col-md-4 border-bottom-1 mt-3 mb-3" >
                    {{ $user->firstName }}
                </div>
                <div class="col-md-2 border-bottom-1 mt-3 mb-3" >
                    Last Name :
                </div>
                <div class="col-md-4 border-bottom-1 mt-3 mb-3" >
                    {{ $user->lastName }}
                </div>
                <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                    Username :
                </div>
                <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                    {{ $user->userName }}
                </div>
                <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                    Email :
                </div>
                <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                    {{ $user->email }}
                </div>
                <div class="col-md-2 border-bottom-1 mt-3 mb-3" >
                    Birthday :
                </div>
                <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                    {{ $user->dob }}
                </div>
                <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                    Gender :
                </div>
                <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                    {{ $user->gender }}
                </div>
                <div class="col-md-4 border-bottom-1 mt-3 mb-3" >
                    Phone Number :
                </div>
                <div class="col-md-8 border-bottom-1 mt-3 mb-3">
                    {{ $user->phoneNumber }}
                </div>
              
            </div>
            <h4 class="pb-4  font-weight-bold border-bottom-1">Address</h4>
            @if ($user->address != null)
                <div class="row font-weight-bold h6">
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Address :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->address->address }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Ward :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->address->ward }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        District :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->address->district }}
                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        City :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">
                        {{ $user->address->city }}
                    </div>
                </div>
               
        @endif
        </div>
    </div>
    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
    </div>
    <div class="col-12">
        <div class="page-header">
          <h4>Select A Shipping Method</h4>
        </div>
      </div>
      <div class="row checkboxArea">
        <div class="col-12 col-lg-6 mb-4">
          <input id="checkbox1" type="radio" name="checkbox" value="1" checked="checked">
          <label for="checkbox1"><span></span>Standard Ground (USPS) - $7.50</label>
          <small>Delivered in 8-12 business days.</small>
        </div>
        <div class="col-12 col-lg-6 mb-4">
          <input id="checkbox2" type="radio" name="checkbox" value="1">
          <label for="checkbox2"><span></span>Premium Ground (UPS) - $12.50</label>
          <small>Delivered in 4-7 business days.</small>
        </div>
        <div class="col-12 col-lg-6 mb-4">
          <input id="checkbox3" type="radio" name="checkbox" value="1">
          <label for="checkbox3"><span></span>UPS 2 Business Day - $15.00</label>
          <small>Orders placed by 9:45AM PST will ship same day.</small>
        </div>
        <div class="col-12 col-lg-6 mb-4">
          <input id="checkbox4" type="radio" name="checkbox" value="1">
          <label for="checkbox4"><span></span>UPS 1 Business Day - $35.00</label>
          <small>Orders placed by 9:45AM PST will ship same day.</small>
        </div>
      </div>
      <div class="col-12">
        <div class="well well-lg clearfix ">
         <form action="{{ route('order.store') }}" method="post">
            @csrf
             <button type="submit" class="btn btn-success  rounded">Order</button>
         </form>
        </div>
      </div>

</div>
{{--Modal--}}

    {{-- <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-content">
                    <h3>New Address</h3>
                    <form action="{{ route('address.store') }}" method="post" class="row">
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
                            <input type="number" class="form-control @error('ward') border-red-500 @enderror" id="ward" name="ward">
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
</div> --}}
<div class="col-md-4 mt-100 mb-100 mr-auto ml-auto">
    <div class="summery-box" style="border:3px solid #f0f0f0;padding:20px;">
        <h4>Order Summery</h4>
        <p>Excepteur sint occaecat cupidat non proi dent sunt.officia.</p>
        <ul class="list-unstyled">
          <li class="d-flex justify-content-between">
            <span class="tag">Subtotal</span>
            <span class="val">$237.00</span>
          </li>
          <li class="d-flex justify-content-between">
            <span class="tag">Shipping &amp; Handling</span>
            <span class="val">$12.00 </span>
          </li>
          <li class="d-flex justify-content-between">
            <span class="tag">Estimated Tax</span>
            <span class="val">$0.00 </span>
          </li>
          <li class="d-flex justify-content-between">
            <span class="tag">Total</span>
            <span class="val">USD  $249.00 </span>
          </li>
        </ul>
      </div>
</div>
</div>

    
    




@endsection
