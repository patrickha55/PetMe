@extends('layouts.client.appWithoutCategory')

@section('content')
    <!--Content-->
    <div class="container-contact100 p-2 mr-auto ml-auto" style="background: url(https://images.hdqwalls.com/wallpapers/chloe-the-secret-life-of-pets-2-j0.jpgv');";>
        <div class="w-75 shadow bg-white rounded p-2 mt-100 mb-100 mr-auto ml-auto" style="">
            <div class="row m-auto">
                <div class="col-3 p-2 m-auto" style="margin: unset;">
                    <div class="row">   
                        <div class="col-12 text-center">
                            @if($user->img != null)
                                <img src="/storage/Image/user/{{ $user->img }}" alt="{{ $user->userName }}" class="rounded-circle" height="200px" width="200px">
                            @else
                                <img src="https://www.nursingadmissions.com/nursing/Assets/Images/user-default.png" alt="{{ $user->userName }}" class="rounded-circle" height="200px" width="200px">
                            @endif
                        </div>
                        <div class="col-12 text-center">
                            <div class="py-3 pb-4">
                                <a href="{{ route('user.edit', $user) }}">
                                    <button type="submit" class="btn-secondary border button">Edit Profile</button>
                                </a>
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
                <div class="col-9 bg-white mt-sm-5 p-">
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
                        <div>
                            <form action="{{ route('address.destroy', $user->address) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-dark rounded mb-30">Delete Address</button>
                            </form>
                        </div>
                    @else
                        <div class="row font-weight-bold h6">
                            <a href="#" title="Quick View" data-toggle="modal" data-target="#addressModal">
                                <button class="btn-secondary  button">Add a new Address</button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
