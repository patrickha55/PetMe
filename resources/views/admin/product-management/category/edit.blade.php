@extends('layouts.admin.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center">Edit Category</h2>
                <form class="row g-3" action="{{ route('animalCategory.update',$category) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-8 col-md-8">
                        <label name="name" for="name" class="form-label font-semibold text-gray-500">Category
                            Name</label>
                        <input type="text" class="form-control @error('name') border-red-500 @enderror" id="name" name="name" value={{ $category->name }}>
                        @error('name')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-4 mx-auto text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
