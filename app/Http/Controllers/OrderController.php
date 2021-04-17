<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use App\CartDetail;

use App\OrderDetail;
use App\Order_Details;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders = Order::all();
        return view('user.order.index')->with('orders', $orders);
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
   
     public function store(Request $request)   //store Data to Orders 
    {   
        $address = auth()->user()->address->address;
        $ward = auth()->user()->address->ward;
        $district = auth()->user()->address->district;
        $city = auth()->user()->address->city;
        $user_id = auth()->user()->id ;
        $cartItems =\Cart::session(auth()->id())->getContent();
        $total_price  = 0;
        foreach ($cartItems as $cartItem){
            $total_price += $cartItem->getPriceSum();
        }
        $phone = auth()->user()->phoneNumber;
        $email = auth()->user()->email; //
        $firstName = auth()->user()->firstName;
        $lastName = auth()->user()->lastName;
        $name = $firstName .' '. $lastName; 
        // dd($name);


        // $request->validate([
        //     'address' => 'required',
        //     'ward' => 'required',
        //     'district' => 'required',
        //     'city' => 'required',
        //     'name'=>'required',

   
        // ]);
       //$orderDetail = new Order_Details();
    Order::create([
        'user_id'=>auth()->user()->id ,
        'total_price'=>$total_price ,
        'status'=>1 ,
        'name'=>$name,
        'phone'=>$phone ,
        'email'=>$email ,  
        'address'=>$address,
        'ward' =>$ward ,
        'district' =>$district ,
        'city' =>$city ,
    ]);

    $order = Order::where('user_id',auth()->id())->latest()->first(); //get latest user's order.

    $cartItems =\Cart::session(auth()->id())->getContent();

    //add product to orderDetail 

    foreach($cartItems as $item){
        OrderDetail::create([
            'order_id'=>$order->id,
            'product_id'=>$item->id,
            'price'=>$item->price ,
            'quantity'=>$item->quantity,
        ]);

        $product = \App\Product::find($item->id);
        
        $stock = $product->stock - $item->quantity;

        $product->update(['stock' => $stock]);
    }

    $cart = Cart::where([
        'user_id' => auth()->id(),
        'status' => 1
    ])->first();

    $cart->update([
        'status' => 0 ,
    ]);

    CartDetail::where([
        'cart_id' => $cart->id,
        'status' => 1
    ])->update([
        'status' => 0
    ]);

    \Cart::session(auth()->id())->clear();

    return view('cart.orderSuccess', compact('order'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Order $order)
    {
        return view('user.order.show')->with('order', $order);
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
