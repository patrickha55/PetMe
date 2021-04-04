<?php

namespace App\Http\Controllers\Admin;

use App\Favorite;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminFavoriteController extends Controller
{
    public function index()
    {
        $users = User::has('favorites')->paginate(10);
        return view('admin.wishlist.index')->with('users', $users);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show(Favorite $wishlists)
    {

    }


    public function edit(Favorite $wishlists)
    {
        //
    }


    public function update(Request $request, Favorite $wishlists)
    {

    }

    public function destroy(Favorite $wishlists)
    {
//        dd($wishlists);
        $wishlists->delete();
        return redirect()->back()->with('status','User\'s wishlist deleted successfully');
    }
}
