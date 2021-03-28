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
                                href="{{ url('/admin/product-management/category/create') }}">Add a Category</a>
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
                                            <th>
                                                Function
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <th>{{ $category->id }}</th>
                                                <th>
                                                    <a class="text-yellow-700" href="{{ route('category.show', ['category' => $category]) }}">{{ $category->name }}</a>
                                                </th>
                                                <th>
{{--                                                    {{ $category->productCategories[($category->id) - 1]->name }}--}}
                                                </th>
                                                <th>{{ $category->status }}</th>
                                                <th>
                                                    <a class="btn-sm btn-warning "
                                                        href="{{ url('/admins/product-management/product/{$Category}/edit') }}">Edit</a>

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
        @endsection
