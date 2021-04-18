<?php

namespace App\Http\Controllers\Admin;

use App\AnimalCategory;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\Supplier;
use App\User;
use Carbon\Carbon;
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
        $orders = Order::orderByDesc('created_at')->paginate(5);


        return view('admin.index')->with(['products' => $products, 'users' => $users, 'suppliers' => $suppliers, 'animals' => $animal_cats, 'orders' => $orders]);


    }

    public function statistic(){

        /** 
         *    Shop Revenue (kind of) 
         */
        
        $salesByMonth = Order::selectRaw('sum(total_price) as price, month(created_at) as month')
                            ->where('status', 'completed')
                            ->whereYear('created_at', '=', Carbon::now())
                            ->groupBy('Month')
                            ->orderBy('Month')
                            ->get();

        //Product added to cart
        $productsInCart = \App\CartDetail::selectRaw('`product_id` ,count(*) as `timeAddedToCart`')
                            ->groupBy('product_id')
                            ->orderBy('product_id')
                            ->get();

        /**
         * Tao collection products de chua cac chi tiet product dc add vao cart nhieu
         * 
         */ 
        $products = collect([]);

        foreach($productsInCart as $productInCart){
            $products->push(Product::find($productInCart->product_id));
        }

        /**
         * San pham duoc mua nhieu nhat
         * 
         */ 
        $productsOrdered = collect([]);
        
        $productIdsOrdered = \App\OrderDetail::selectRaw('`product_id`, count(*) as `timeOrdered`')
                                ->where('status', 1)
                                ->groupBy('product_id')
                                ->orderByDesc('timeOrdered')
                                ->take(10)->get();

        foreach($productIdsOrdered as $productIdOrdered){
            $productsOrdered->push(Product::find($productIdOrdered->product_id));
        }

        // dd($productIdsOrdered->where('product_id', 2)->first());
        

        return view('admin.statistic.index')->with([
                'products' => $products,
                'productsInCart' => $productsInCart,
                'productsOrdered' => $productsOrdered,
                'productIdsOrdered' => $productIdsOrdered,
                'salesByMonth' => $salesByMonth
        ]);
    }
}
