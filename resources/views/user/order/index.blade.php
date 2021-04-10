@extends('layouts.client.appWithoutCategory')

@section('content')
    <div class="w-75 m-auto" style="margin-top: 50px; margin-bottom: 200px;">
        <h1 class="text-center font-weight-bold col-12 mt-5 mb-5">
            My Orders
        </h1>
        @if(count($orders))
        <table class="table table-hover card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
            <thead>
              <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Date of Purchase</th>
                <th scope="col">Grand Total</th>
                <th scope="col">Order Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach( $orders as $order)
                <tr>
                    <th scope="row">
                        #<a href="{{ route('order.show', $order) }}">{{ $order->id }}</a>
                    </th>
                    <td>{{ $order->created_at->toDayDateTimeString() }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
        <div class="col-12">

        </div>
        @else
        <div class="col-12">
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body row text-center">
                    <div class="m-auto">
                        <img src="/storage/Image/order.png" width="80%" height="80%" alt="Empty Cart">
                    </div>
                    <h3 class="col-12 mt-20 mb-20">There is no past order.</h3>
                    <div class="m-auto">
                        <a href="{{ route('products') }}" class="col-12 btn-lg rounded btn-danger">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
