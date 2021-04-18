<?php

namespace App\Http\Controllers\Admin;

use App\AnimalCategory;
use App\CartDetail;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\Supplier;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
         * Lay tong so luong product theo tung category
         */

        $totalProductsByCategory = DB::table('products')
                                    ->join('product_categories', 'products.id', '=', 'product_categories.id')
                                    ->join('animal_categories','product_categories.id', '=', 'animal_categories.id')
                                    ->selectRaw('animal_categories.name, count(products.id) as products')
                                    ->where('animal_categories.deleted_at', '=', null)
                                    ->groupBy('animal_categories.name')->get();
//        dd($totalProductsByCategory);
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
        $productsInCart = CartDetail::selectRaw('`product_id` ,count(*) as `timeAddedToCart`')
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

        return view('admin.statistic.index')->with([
                'products' => $products,
                'productsInCart' => $productsInCart,
                'productsOrdered' => $productsOrdered,
                'productIdsOrdered' => $productIdsOrdered,
                'salesByMonth' => $salesByMonth,
                'totalProductsByCategory' => $totalProductsByCategory
        ]);
    }
}
