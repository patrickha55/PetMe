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
        $orders = Order::orderByDesc('created_at')->paginate(10);
        return view('admin.order.index')->with([
            'orders' => $orders
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

        /**
         *  Neu order status la completed thi: 
         *      - Doi status co order_id o bang transaction thanh 1 
         *      - Doi status co order_id o bang order_detail thanh 1
         */

        if($order->status == "completed"){
            $transactionId = Transaction::where('order_id',$order->id)->first()->id;
                Transaction::find($transactionId)->update([
                'status'=>1,
            ]);

            $orderDetails = OrderDetail::where('order_id', $order->id)->get();

            foreach($orderDetails as $orderDetail){
                $orderDetail->update([
                    'status' => 1
                ]);
            };
        };

        return back()->with('status', 'Order status updated successfully!');
    }
    


    public function destroy($id)
    {
        //
    }
}
