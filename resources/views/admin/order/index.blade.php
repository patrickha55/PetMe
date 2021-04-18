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
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>
                                                <a href="{{ route('users.show', $order->user) }}">{{$order->user->userName}}</a>
                                            </td>
                                            <td>
                                                @foreach($order->productDetails as $product)
                                                    <a href="{{ route('product.show', $product) }}">{{$product->name}}</a>/
                                                @endforeach
                                            </td>
                                            <td>@currency($order->total_price) VNĐ</td>
                                            <td class="p-4 mb-4">
                                                <form action="{{ route('orders.update', $order) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                        <select class="form-control select font-weight-bold h6" name="status" id="status" data-mdb-clear-button="true">
                                                            @switch($order->status)
                                                                @case('pending')
                                                                    <option selected value="pending">pending</option>
                                                                    <option value="confirmed">confirmed</option>
                                                                    <option value="packaging">packaging</option>
                                                                    <option value="shipping">shipping</option>
                                                                    <option value="shipped">shipped</option>
                                                                    <option value="completed">completed</option>
                                                                    <option value="canceled">canceled</option>
                                                                    @break
                                                                @case('confirmed')
                                                                    <option value="pending">pending</option>
                                                                    <option selected value="confirmed">confirmed</option>
                                                                    <option value="packaging">packaging</option>
                                                                    <option value="shipping">shipping</option>
                                                                    <option value="shipped">shipped</option>
                                                                    <option value="completed">completed</option>
                                                                    <option value="canceled">canceled</option>
                                                                    @break
                                                                @case('packaging')
                                                                    <option value="pending">pending</option>
                                                                    <option value="confirmed">confirmed</option>
                                                                    <option selected value="packaging">packaging</option>
                                                                    <option value="shipping">shipping</option>
                                                                    <option value="shipped">shipped</option>
                                                                    <option value="completed">completed</option>
                                                                    <option value="canceled">canceled</option>
                                                                    @break
                                                                @case('shipping')
                                                                    <option value="pending">pending</option>
                                                                    <option value="confirmed">confirmed</option>
                                                                    <option value="packaging">packaging</option>
                                                                    <option selected value="shipping">shipping</option>
                                                                    <option value="shipped">shipped</option>
                                                                    <option value="completed">completed</option>
                                                                    <option value="canceled">canceled</option>
                                                                    @break
                                                                @case('shipped')
                                                                    <option value="pending">pending</option>
                                                                    <option value="confirmed">confirmed</option>
                                                                    <option value="packaging">packaging</option>
                                                                    <option value="shipping">shipping</option>
                                                                    <option selected value="shipped">shipped</option>
                                                                    <option value="completed">completed</option>
                                                                    <option value="canceled">canceled</option>
                                                                    @break
                                                                @case('completed')
                                                                    <option value="pending">pending</option>
                                                                    <option value="confirmed">confirmed</option>
                                                                    <option value="packaging">packaging</option>
                                                                    <option value="shipping">shipping</option>
                                                                    <option value="shipped">shipped</option>
                                                                    <option selected value="completed">completed</option>
                                                                    <option value="canceled">canceled</option>
                                                                    @break
                                                                @case('canceled')
                                                                    <option value="pending">pending</option>
                                                                    <option value="confirmed">confirmed</option>
                                                                    <option value="packaging">packaging</option>
                                                                    <option value="shipping">shipping</option>
                                                                    <option value="shipped">shipped</option>
                                                                    <option value="completed">completed</option>
                                                                    <option selected value="canceled">canceled</option>
                                                                    @break
                                                            @endswitch
                                                        </select>
                                                        <button type="submit" class="btn-sm btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>{{$order->name ?? 'N/A'}}</td>
                                            <td>{{$order->phone ?? 'N/A' }}</td>
                                            <td>{{$order->email ?? 'N/A' }}</td>
                                            <td>{{$order->address ?? 'N/A' }}</td>
                                            <td>{{$order->ward ?? 'N/A' }}</td>
                                            <td>{{$order->district ?? 'N/A' }}</td>
                                            <td>{{$order->city ?? 'N/A' }}</td>
                                            <td>{{$order->created_at }}</td>
                                            <td>{{$order->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <span>{{ $orders->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
