@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="shadow-lg p-3  bg-white rounded">

                        <div class="card-header card-header-dark d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mt-0 text-dark ">Product</h4>
                                <p class="card-category text-dark ">Product Management</p>
                                @if (session('status'))
                                    <p class="text-green-500 font-black">
                                        {{ session('status') }}
                                    </p>
                                @endif
                            </div>
                            <a type="button" class="btn btn-warning"
                                href="{{ url('/admin/product-management/product/create') }}">Add a product</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead class="">
                                        <tr>
                                            <th>ID</th> <th>Name</th> <th>Brand</th> <th>Description</th> <th>Price</th> <th>Stock</th> <th>Image</th> <th colspan="2">Function</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <th>{{ $product->id }}</th>
                                                <th>
                                                    <a class="text-yellow-700" href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a>
                                                </th>
                                                <th>{{ $product->supplier->name}}</th>
                                                <th>{{ $product->description }}</th>
                                                <th>@currency($product->price) VN??</th>
                                                <th>{{ $product->stock }}</th>
                                                <th>
                                                    <img src="/storage/Image/product/{{ $product->img }}" alt="Whiskas Chicken & Turkey" width="50" height="auto">
                                                </th>
                                                <th>
                                                    <a class="" href="{{ route('product.edit', $product) }}"><i title="Edit" class="fas fa-edit"></i></a>
                                                </th>
                                                <th>
                                                    <form action="{{ route('product.destroy', $product) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"><i title="Delete" class="fas fa-trash"></i></button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach 
                                    
                                    </tbody>
                                </table>
                                <div>
                                    <span>{{ $products->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
