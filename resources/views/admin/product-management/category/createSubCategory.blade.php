@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center">New Sub Category</h2>
                <form class="row g-3" action="{{ route('productCategory.store') }}" method="POST">
                    @csrf
                    <div class="col-6 col-md-6">
                        <label for="category" class="form-label font-semibold text-gray-500">Category</label>
                        <select class="form-control @error('category') border-red-500 @enderror"" name="category_id" id="category">
                            <option value="" selected>Please Select</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror   
                    </div>
                    <div class="col-6 col-md-6">
                        <label name="name" for="name" class="form-label font-semibold text-gray-500">Sub
                            Category Name</label>
                        <input type="text" class="form-control @error('name') border-red-500 @enderror" id="name" name="name">
                        @error('name')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
