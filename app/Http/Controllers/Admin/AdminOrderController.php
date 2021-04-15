<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Order;

class AdminOrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        $orderDetails = OrderDetail::all();
        return view('admin.order.index')->with([
            'orders' => $orders,
            'orderDetails' => $orderDetails
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Order $order)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        Order::find($order->id)->update([
            'status' => $request->status
        ]);

        return back()->with('status', 'Order status updated successfully!');
    }


    public function destroy($id)
    {
        //
    }
}
