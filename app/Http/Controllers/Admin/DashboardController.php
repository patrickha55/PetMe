<?php

namespace App\Http\Controllers\Admin;

use App\AnimalCategory;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    public function index(){
        $products = Product::all();
        $users = User::whereRoleIs('user')->get();
        $suppliers = Supplier::all();
        $animal_cats = AnimalCategory::all();
        $orders = Order::all();


        return view('admin.index')->with(['products' => $products, 'users' => $users, 'suppliers' => $suppliers, 'animals' => $animal_cats, 'orders' => $orders]);


    }

    public function statistic(){

        //Product added to cart
        $productsInCart = \App\CartDetail::selectRaw('`product_id` ,count(*) as `timeAddedToCart`')->groupBy('product_id')->orderByDesc('timeAddedToCart')->get();
//        dd(count($productsInCart));
        /*
         * Tao collection products de chua cac chi tiet product dc add vao cart nhieu
         * */
        $products = collect([]);

        foreach($productsInCart as $productInCart){
            $products->push(Product::find($productInCart->product_id));
        }

        return view('admin.statistic.index')
            ->with([
                'products' => $products,
                'productsInCart' => $productsInCart,
            ]);
    }
}
