<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order_Details;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //sdhjkd

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('cart.orderSuccess');
            
    //     $request->validate([
    //         'address' => 'required',
    //         'ward' => 'required',
    //         'district' => 'required',
    //         'city' => 'required',
    //         // 'shipping_phone' => 'required',
    //         // 'shipping_zipcode' => 'required',
    //         // 'payment_method' => 'required',
    //     ]);
    //    //$orderDetail = new Order_Details();
    //     $order = new Order();

    //     // $order->order_number = uniqid('OrderNumber-');
    //    //order -> product 

    //     $order->ward = $request->input('ward');
            
    //     $order->district = $request->input('district');
    //     $order->address = $request->input('address');
    //     $order->city = $request->input('city');
    //     // $order->shipping_state = $request->input('shipping_state');
    //     // $order->shipping_city = $request->input('shipping_city');
    //     // $order->shipping_address = $request->input('shipping_address');
    //     // $order->shipping_phone = $request->input('shipping_phone');
    //     // $order->shipping_zipcode = $request->input('shipping_zipcode');

    //     // if(!$request->has('billing_fullname')) {
    //     //     $order->billing_fullname = $request->input('shipping_fullname');
    //     //     $order->billing_state = $request->input('shipping_state');
    //     //     $order->billing_city = $request->input('shipping_city');
    //     //     $order->billing_address = $request->input('shipping_address');
    //     //     $order->billing_phone = $request->input('shipping_phone');
    //     //     $order->billing_zipcode = $request->input('shipping_zipcode');
    //     // }else {
    //     //     $order->billing_fullname = $request->input('billing_fullname');
    //     //     $order->billing_state = $request->input('billing_state');
    //     //     $order->billing_city = $request->input('billing_city');
    //     //     $order->billing_address = $request->input('billing_address');
    //     //     $order->billing_phone = $request->input('billing_phone');
    //     //     $order->billing_zipcode = $request->input('billing_zipcode');
    //     // }


    //     $order->total_price = \Cart::session(auth()->id())->getTotal();
       
    // //    $str = "";
   
    // //       $cartItems = \Cart::session(auth()->id())->getContent();
    // //     foreach($cartItems as $item) {
    // //        // $orderDetail->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
    // //         $str +=  [$item->name] ;    
    // //     }
   
    //    $order->products = \Cart::session(auth()->id())->getContent();

    //     $order->user_id = auth()->id();

    //     // if (request('payment_method') == 'paypal') {
    //     //     $order->payment_method = 'paypal';
    //     // }

    //     $order->save();

    //     // $cartItems = \Cart::session(auth()->id())->getContent();

    //     // foreach($cartItems as $item) {
    //     //     $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
    //     // }

    //     // $order->generateSubOrders();

    //     // if (request('payment_method') == 'paypal') {

    //     //     return redirect()->route('paypal.checkout', $order->id);

    //     // }

    //     \Cart::session(auth()->id())->clear();

    //     return redirect()->route('home')->withMessage('Order has been placed');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
   
}
