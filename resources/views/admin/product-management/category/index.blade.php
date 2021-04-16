@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">

                <div class="card card-plain">
                    <div class="shadow-lg p-3  bg-white rounded">

                    <div class="card-header card-header-dark d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mt-0 text-dark ">Category</h4>
                            <p class="card-category text-dark ">Category Management</p>
                        </div>
                        <a type="button" class="btn btn-warning"
                            href="{{ route('animalCategory.create') }}">Add a Category</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Sub Categories
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th colspan="2">
                                        Function
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th>{{ $category->id }}</th>
                                        <th>
                                            <a class="text-yellow-700" href="">{{ $category->name }}</a>
                                        </th>
                                        <th>
                                            @foreach($category->productCategories as $proCat)
                                                {{ $proCat->name . " /" }}
                                            @endforeach
                                        </th>
                                        <th>{{ $category->status }}</th>
                                        <th>
                                            <a class="" href="{{ route('animalCategory.edit', $category) }}"><i title="Edit" class="fas fa-edit"></i></a>
                                        </th>
                                        <th>
                                            <form action="{{ route('animalCategory.destroy', $category) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"><i title="Hide" class="fas fa-eye-slash"></i></button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <hr>
                    <div class="card-header card-header-dark d-flex justify-content-between pt-5">
                        <div>
                            <p class="card-category text-dark ">Sub Category Management</p>
                        </div>
                        <a type="button" class="btn btn-warning"
                           href="{{ route('productCategory.create') }}">Add a Sub Category</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Products
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th colspan="2">
                                        Function
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($subCategories as $subCategory)
                                    <tr>
                                        <th>{{ $subCategory->id }}</th>
                                        <th>
                                            <a class="text-yellow-700" href="">{{ $subCategory->name }}</a>
                                        </th>
                                        <th>
                                            @foreach($subCategory->products as $product)
                                                {{ $product->name . " /" }}
                                            @endforeach
                                        </th>
                                        <th>{{ $subCategory->status }}</th>
                                        <th>
                                            <a class="" href="{{ route('productCategory.edit', $subCategory) }}"><i title="Edit" class="fas fa-edit"></i></a>
                                        </th>
                                        <th>
                                            <form action="{{ route('productCategory.destroy', $subCategory) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"><i title="Hide" class="fas fa-eye-slash"></i></button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
