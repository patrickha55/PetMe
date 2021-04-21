<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderDetail;
use App\Transaction;
use App\Product;
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
        $order->update([
            'status' => $request->status
        ]);

        return redirect()->route('orders.checkOrderStatus', compact('order'));
       // return back()->with('status', 'Order status updated successfully!');
    }

    public function checkOrderStatus(Order $order){ 

        /**
         *  Neu order status la completed thi: 
         *      - Doi status co order_id o bang transaction thanh 1 
         *      - Doi status co order_id o bang order_detail thanh 1
         */

        $transaction = Transaction::where('order_id',$order->id)->first();
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();

        /* 
        *   Tao collection products de chua cac product trong $orderDetails cua $order parameter
        */

        $products = collect([]);

        foreach($orderDetails as $orderDetail){
            $products->push([$orderDetail->product_id, $orderDetail->quantity]);
        };
 
        if($order->status == "completed"){

            $transaction->update([
                'status' => 1,
            ]);

            foreach($orderDetails as $orderDetail){
                $orderDetail->update([
                    'status' => 1
                ]);
            };

            /* 
            *   Khong duoc doi thang tu pending sang completed, stock se ko giam
            */

        } else if($order->status == "canceled"){ // Neu admin doi status thanh canceled thi cho status transaction va order detail = 0

            $transaction->update([
                'status' => 0,
            ]);

            foreach($orderDetails as $orderDetail){
                $orderDetail->update([
                    'status' => 0
                ]);
            };

            /* 
            *   Cong lai stock cho product 
            *   
            *   Neu Order dang o trang thai pending ma admin doi thanh canceled thi stock van cong them 1 mac du stock chua bi tru
            *   De check dieu kien nay thi tuong lai phai them 1 du lieu status khac de phan biet xem stock da bi tru hay chua
            */

            foreach($products as $product){
                $p = Product::find($product[0]);
                $p->update([
                    'stock' => $p->stock  + $product[1],
                ]);
            }
        } else if($order->status != 'pending' || $order->status != 'canceled' || $order->status != 'completed') {

            /* 
            *   Neu status la nhung trang thai ngoai 3 trang thai tren thi giam so luong stock trong kho
            */

            foreach($products as $product){
                $p = Product::find($product[0]);
                $p->update([
                    'stock' => $p->stock - $product[1],
                ]);
            }
        };

        return back()->with('status', 'Order status updated successfully!');
    }
    


    public function destroy($id)
    {
        //
    }
}
