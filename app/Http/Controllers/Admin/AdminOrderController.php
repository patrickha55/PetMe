<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Order_Details;

class AdminOrderController extends Controller
{
    
    public function index()
    {
        $orders = Order::all();
        $orderDetails = Order_Details::all();
        return view('admin.order.index')->with([
            'orders' => $orders,
            'orderDetails' => $orderDetails
        ]);
    }

    
    public function create()
    {
        //
    }

     function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
