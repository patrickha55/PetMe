@extends('layouts.admin.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center font-bold">Add New Suppliers</h2>
                <form class="row g-3" action="{{ url('/admin/user-management/users') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label name="name" for="name" class="form-label font-semibold text-gray-500">Name</label>
                        <input type="text" class="form-control @error('name') border-red-500 @enderror" id="name" name="name">
                        @error('name')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="email" for="email" class="form-label font-semibold text-gray-500">Email</label>
                        <input type="text" class="form-control @error('email') border-red-500 @enderror" id="email" name="email">
                        @error('email')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="phone" for="phone"
                            class="form-label font-semibold text-gray-500">Phone 1</label>
                        <input type="text" class="form-control @error('phone') border-red-500 @enderror" id="phone_1" name="phone_1">
                        @error('phone')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="phone" for="phone" class="form-label font-semibold text-gray-500">Phone 2</label>
                        <input type="text" class="form-control @error('phone') border-red-500 @enderror" id="phone_2" name="phone_2">
                        @error('phone')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label name="website" for="website"
                            class="form-label font-semibold text-gray-500">Website</label>
                        <input type="text" class="form-control @error('website') border-red-500 @enderror" name="website" id="website">
                        @error('website')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="address" for="address" class="form-label font-semibold text-gray-500">Address</label>
                        <input type="text" name="address" class="form-control @error('address') border-red-500 @enderror"
                            id="address">
                        @error('address')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="ward" for="ward" class="form-label font-semibold text-gray-500">Ward</label>
                        <input type="text" class="form-control @error('ward') border-red-500 @enderror" id="ward" name="ward">
                        @error('ward')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="district" for="district" class="form-label font-semibold text-gray-500">District</label>
                        <input type="text" class="form-control @error('district') border-red-500 @enderror" name="district" id="district">
                        @error('district')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label name="city" for="city" class="form-label font-semibold text-gray-500">City</label>
                        <input type="text" class="form-control @error('city') border-red-500 @enderror" name="city" id="city">
                        @error('city')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
