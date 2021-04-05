<?php

namespace App\Http\Controllers\Admin;

use App\AnimalCategory;
use App\Http\Controllers\Controller;
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


        return view('admin.index')->with(['products' => $products, 'users' => $users, 'suppliers' => $suppliers, 'animals' => $animal_cats]);
    }
}
