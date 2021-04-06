@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">

                <div class="card card-plain">
                    <div class="shadow-lg p-3  bg-white rounded">

                        <div class="card-header card-header-dark d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mt-0 text-dark ">Orders</h4>
                                <p class="card-category text-dark ">Order Management</p>
                                @if (session('status'))
                                    <p class="text-green-500 font-black">
                                        {{ session('status') }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead class="">
                                    <tr>
                                        <th>ID</th> <th>User</th> <th>Products</th> 
                                        <th>Total Price</th> <th>Status</th> <th>Name</th> 
                                        <th>Phone</th> <th>Email</th> <th>Address</th> 
                                        <th>Ward</th> <th>District</th><th>City</th>
                                        <th>Day Created</th><th>Day Updated</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($orders as $product)
                                        <tr>
                                            <th>{{ $product->id }}</th>
                                            <th>
                                                <a class="text-yellow-700" href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a>
                                            </th>
                                            <th>{{ $product->supplier->name}}</th>
                                            <th>{{ $product->description }}</th>
                                            <th>@currency($product->price) VNĐ</th>
                                            <th>{{ $product->stock }}</th>
                                            <th>
                                                <img src="/storage/Image/product/{{ $product->img }}" alt="Whiskas Chicken & Turkey" width="50" height="auto">
                                            </th>
                                            <th class="mx-auto w-7" >
                                                <div class="row">
                                                    <div class="">
                                                        <a class="btn-sm btn-warning " href="{{ route('product.edit', $product) }}" style="font-size: 10px;">Edit</a>
                                                    </div>
                                                    <div class="">
                                                        <form action="{{ route('product.destroy', $product) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn-sm btn-danger" style=" font-size: 10px;">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                {{-- <div>
                                    <span>{{ $products->links() }}</span>
                                </div> --}}
                            </div>
                        </div>

                        <div class="border-top-1>
                            <div class="card-header card-header-dark d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title mt-0 text-dark ">Order Details</h4>
                                    <p class="card-category text-dark ">Order Details Management</p>
                                    @if (session('status'))
                                        <p class="text-green-500 font-black">
                                            {{ session('status') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
    
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead class="">
                                        <tr>
                                            <th>ID</th> <th>User</th> <th>Products</th> 
                                            <th>Total Price</th> <th>Status</th> <th>Name</th> 
                                            <th>Phone</th> <th>Email</th> <th>Address</th> 
                                            <th>Ward</th> <th>District</th><th>City</th>
                                            <th>Day Created</th><th>Day Updated</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders as $product)
                                            <tr>
                                                <th>{{ $product->id }}</th>
                                                <th>
                                                    <a class="text-yellow-700" href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a>
                                                </th>
                                                <th>{{ $product->supplier->name}}</th>
                                                <th>{{ $product->description }}</th>
                                                <th>@currency($product->price) VNĐ</th>
                                                <th>{{ $product->stock }}</th>
                                                <th>
                                                    <img src="/storage/Image/product/{{ $product->img }}" alt="Whiskas Chicken & Turkey" width="50" height="auto">
                                                </th>
                                                <th class="mx-auto w-7" >
                                                    <div class="row">
                                                        <div class="">
                                                            <a class="btn-sm btn-warning " href="{{ route('product.edit', $product) }}" style="font-size: 10px;">Edit</a>
                                                        </div>
                                                        <div class="">
                                                            <form action="{{ route('product.destroy', $product) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn-sm btn-danger" style=" font-size: 10px;">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        @endforeach
    
                                        </tbody>
                                    </table>
                                    {{-- <div>
                                        <span>{{ $products->links() }}</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
