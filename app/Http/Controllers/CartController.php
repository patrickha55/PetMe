<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\CartDetail;
use App\AnimalCategory;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class CartController extends Controller
{


    public function add( Request $request,Product $product): RedirectResponse
    {
    if(Auth::check()){

        // Lay cart co status la active(1), neu chua co thi tao cart moi.

        $cart = Cart::where([
            'user_id' => auth()->id(),
            'status' => 1
            ])->first();

        if(!isset($cart)){
            $cart = \App\Cart::create([
                'user_id' => auth()->id(),
            ]);
        }

        // Them item vao cart tren session

        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
<<<<<<< HEAD
            'name' => '$product->name',
            'description'=> $product->description,
=======
            'name' => $product->name,
>>>>>>> main
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product,
        ));

        // Update hoac tao cart details moi

        $cartDetail = CartDetail::where([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'status' => 1
        ])->first();

        if(isset($cartDetail)){
            $cartDetail->update([
                'quantity' => $cartDetail->quantity + 1,
                'price' => $product->price
            ]);
        } else {
            CartDetail::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'status' => 1,
                'quantity' => 1,
                'price' => $product->price,
            ]);
        }

    }

        return redirect()->back()->with('addToCart', 'Item added to cart');
    }

//dd(Cart::all()->where('user_id',auth()->user()->id)->first());
//    dd((Cart::all()->where('user_id',auth()->user()->id) )) ;
//    if(count(Cart::all()->where('user_id',auth()->user()->id))){

//    }

    public function updateCart(Request $request, Product $product)
    {
        //Kiem tra so luong nguoi dung nhap vao co nhieu hon so luong ton kho

        if ($request->quantity > $product->stock){
            return redirect()->back()->with('status', 'There are not enough items in our inventory. Sorry!');
        } else {

            //Neu stock du thi thay doi so luong quantity

            \Cart::session(auth()->id())->update($product->id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            ));

            //Cap nhap quantity trong cart detail table

            $cartId = Cart::where([
                'user_id' => auth()->id(),
                'status' => 1
                ])->first()->id;

            $quantity = \Cart::session(auth()->id())->getContent()->where('id',$product->id)->first()->quantity ;

            CartDetail::where([
                'cart_id' => $cartId,
                'product_id' => $product->id,
                'status' => 1
            ])->update(['quantity' => $quantity]);

            return redirect()->back()->with('status', 'Item updated successfully!');
        }
    }



    public function updatePlusCart(Product $product)
    {
        $cartId = Cart::where([
            'user_id' => auth()->id(),
            'status' => 1
            ])->first()->id;

        // Lay cart id va update quantity +1 cho cart tren session

        \Cart::session(auth()->id())->update($product->id, array(
            'quantity' => +1,
        ));

        //Cap nhap quantity trong cart detail table

        $quantity = \Cart::session(auth()->id())->getContent()->where('id',$product->id)->first()->quantity ;

        CartDetail::where([
            'cart_id' => $cartId,
            'product_id' => $product->id,
            'status' => 1
        ])->update(['quantity' => $quantity]);

      return redirect()->back();

    }

    public function updateMinusCart(Product $product)
    {
        // Lay cart id va update quantity -1 cho cart tren session

        $cartId = Cart::where([
            'user_id' => auth()->id(),
            'status' => 1
            ])->first()->id;
        \Cart::session(auth()->id())->update($product->id, array(
         'quantity' => -1,
        ));

        //Cap nhap quantity trong cart detail table

        $quantity = \Cart::session(auth()->id())->getContent()->where('id',$product->id)->first()->quantity ;

        CartDetail::where([
            'cart_id' => $cartId,
            'product_id' => $product->id,
            'status' => 1
        ])->update(['quantity' => $quantity]);

        return redirect()->back();
    }

    public function checkout()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        $total =0 ;

        foreach($cartItems as $item){
        $total += $item->getPriceSum();
        }

        return view('cart.checkout')->with([
             'cartItems'=>$cartItems,
             'total'=>$total,
            ]);

    }

    public function destroyCartItem(Product $product)
    {
        //Lay cartid va chuyen status cua cart detail co product_id bang voi id cua product o param = 0

        $cartId = Cart::where([
            'user_id' => auth()->id(),
            'status' => 1
            ])->first()->id;

        CartDetail::where([
            'cart_id' => $cartId,
            'product_id' => $product->id
            ])
            ->update([
            'status' => 0
        ]);

        //Xoa product khoi cart session

        \Cart::session(auth()->id())->remove($product->id);
        // CartDetail::where('cart_id',auth())
        return redirect()->back();
    }

    // Hien thi thong tin tat ca sp trong cart session

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        $subTotal = $total = 0;

        foreach ($cartItems as $cartItem){
            $subTotal += $cartItem->getPriceSum();
        }

        $total = $subTotal;

        return view('cart.index')->with([
            'cartItems' => $cartItems,
            'subTotal' => $subTotal,
            'total' => $total
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }


    public function destroy(Cart $cart)
    {
//
    }
}
