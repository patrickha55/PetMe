<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderDetail;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return redirect()->route('orders.checkOrderStatus',compact('order'));
       // return back()->with('status', 'Order status updated successfully!');
    }
    public function checkOrderStatus(Order $order){ 
       $status =$order->status;
       if($status == "completed"){
          $transactionId = Transaction::where('order_id',$order->id)->first()->id;
        $tran = Transaction::find($transactionId)->update([
            'status'=>1 ,
        ]);
        }
         return back()->with('status', 'Order status updated successfully!');
     
       }
    


    public function destroy($id)
    {
        //
    }
}
