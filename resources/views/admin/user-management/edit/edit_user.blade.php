@extends('layouts.admin.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center">New Customer</h2>
                <form class="row g-3" action="{{ route('users.edit', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label name="firstName" for="firstName" class="form-label font-semibold text-gray-500">First
                            Name</label>
                        <input type="text" class="form-control @error('firstName') border-red-500 @enderror" id="firstName" name="firstName" value="{{$user->firstName}}">
                        @error('firstName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="lastName" for="lastName" class="form-label font-semibold text-gray-500">Last
                            Name</label>
                        <input type="text" class="form-control @error('lastName') border-red-500 @enderror" id="lastName" name="lastName" value="{{$user->lastName}}">
                        @error('lastName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="userName" for="userName"
                            class="form-label font-semibold text-gray-500">Username</label>
                        <input type="text" class="form-control @error('userName') border-red-500 @enderror" id="userName" name="userName" value="{{$user->userName}}">
                        @error('userName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="dob" for="dob" class="form-label font-semibold text-gray-500">Day of Birth</label>
                        <input type="date" class="form-control @error('dob') border-red-500 @enderror" id="dob" name="dob" value="{{$user->dob}}">
                        @error('dob')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <div class="row">
                            <p class="col-form-label col-sm-2 pt-0 text-black ">Gender</p>
                            <div class="col-sm-10">
                                @if ($user->gender="M") 
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridGender1" value="M" checked>
                                    <label class="form-check-label text-black" for="gridGender1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridGender2" value="F">
                                    <label class="form-check-label text-black" for="gridGender2">
                                        Female
                                    </label>
                                </div>
                                @else
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridGender1" value="M" >
                                    <label class="form-check-label text-black" for="gridGender1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridGender2" value="F" checked>
                                    <label class="form-check-label text-black" for="gridGender2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label name="email" for="email" class="form-label font-semibold text-gray-500">Email</label>
                        <input type="email" class="form-control @error('email') border-red-500 @enderror" id="email" name="email" value="{{$user->email}}">
                        @error('email')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="phoneNumber" for="phoneNumber" class="form-label font-semibold text-gray-500">Phone
                            Number</label>
                        <input type="number" class="form-control @error('phoneNumber') border-red-500 @enderror" name="phoneNumber" id="phoneNumber" value="{{$user->phoneNumber}}">
                        @error('phoneNumber')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection