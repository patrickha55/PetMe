@extends('layouts.admin.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center">New Sub Category</h2>
                <form class="row g-3" action="{{ url('/admin/user-management/users') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="firstName" class="form-label font-semibold text-gray-500">First
                            Name</label>
                        <input type="text" class="form-control @error('firstName') border-red-500 @enderror" id="firstName" name="firstName">
                        @error('firstName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label font-semibold text-gray-500">Last
                            Name</label>
                        <input type="text" class="form-control @error('lastName') border-red-500 @enderror" id="lastName" name="lastName">
                        @error('lastName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="userName"
                            class="form-label font-semibold text-gray-500">Username</label>
                        <input type="text" class="form-control @error('userName') border-red-500 @enderror" id="userName" name="userName">
                        @error('userName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="dob" class="form-label font-semibold text-gray-500">Day of Birth</label>
                        <input type="date" class="form-control @error('dob') border-red-500 @enderror" id="dob" name="dob">
                        @error('dob')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <fieldset class="form-group col-md-12">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 text-gray-500">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridGender1" value="M"
                                        checked>
                                    <label class="form-check-label text-gray-500" for="gridGender1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridGender2" value="F">
                                    <label class="form-check-label text-gray-500" for="gridGender2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="col-md-6">
                        <label  for="password"
                            class="form-label font-semibold text-gray-500">Password</label>
                        <input type="password" class="form-control @error('password') border-red-500 @enderror" name="password" id="password">
                        @error('password')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  for="password_confirmation" class="form-label font-semibold text-gray-500">Confirm
                            Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') border-red-500 @enderror"
                            id="password_confirmation">
                        @error('password_confirmation')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label font-semibold text-gray-500">Email</label>
                        <input type="email" class="form-control @error('email') border-red-500 @enderror" id="email" name="email">
                        @error('email')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  for="phoneNumber" class="form-label font-semibold text-gray-500">Phone
                            Number</label>
                        <input type="number" class="form-control @error('phoneNumber') border-red-500 @enderror" name="phoneNumber" id="phoneNumber">
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
