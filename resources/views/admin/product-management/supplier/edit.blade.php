@extends('layouts.admin.admin')
<style>
    .red-span {
        color: red;
    }
</style>
@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center font-bold">Edit Suppliers</h2>
                <form class="row g-3" action="{{ route('supplier.update', $supplier) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="name" class="form-label font-semibold text-gray-500">Name <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('name') border-red-500 @enderror" id="name" name="name" value="{{$supplier->name}}">
                        @error('name')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label font-semibold text-gray-500">Email <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('email') border-red-500 @enderror" id="email" name="email" value="{{$supplier->email}}">
                        @error('email')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="phone_1"
                            class="form-label font-semibold text-gray-500">Phone 1 <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('phone_1') border-red-500 @enderror" id="phone_1" name="phone_1" value="{{$supplier->phone_1}}">
                        @error('phone_1')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  for="phone_2" class="form-label font-semibold text-gray-500">Phone 2 <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('phone_2') border-red-500 @enderror" id="phone_2" name="phone_2" value="{{$supplier->phone_2}}">
                        @error('phone_2')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label  for="website"
                            class="form-label font-semibold text-gray-500">Website <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('website') border-red-500 @enderror" name="website" id="website" value="{{$supplier->website}}">
                        @error('website')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  for="address" class="form-label font-semibold text-gray-500">Address <span class="red-span">*</span></label>
                        <input type="text" name="address" class="form-control @error('address') border-red-500 @enderror"
                            id="address" value="{{$supplier->address}}">
                        @error('address')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  for="ward" class="form-label font-semibold text-gray-500">Ward <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('ward') border-red-500 @enderror" id="ward" name="ward" value="{{$supplier->ward}}">
                        @error('ward')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  for="district" class="form-label font-semibold text-gray-500">District <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('district') border-red-500 @enderror" name="district" id="district" value="{{$supplier->district}}">
                        @error('district')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label  for="city" class="form-label font-semibold text-gray-500">City <span class="red-span">*</span></label>
                        <input type="text" class="form-control @error('city') border-red-500 @enderror" name="city" id="city" value="{{$supplier->city}}">
                        @error('city')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
