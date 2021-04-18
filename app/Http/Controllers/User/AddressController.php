<?php

namespace App\Http\Controllers\User;

use App\Address;
use App\Http\Controllers\Controller;
use http\Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
           'address' => 'required|string|max:255',
           'ward' => 'required|string|min:1|max:255',
           'district' => 'required|string|max:255',
           'city' => 'required|string|max:255'
        ]);

        Address::create([
            'user_id' => auth()->user()->id,
            'address' => $request->address,
            'ward' => $request->ward,
            'district' => $request->district,
            'city' => $request->city,
        ]);

        return redirect()->route('user.show', auth()->user())->with('status', 'Address created successfully!');
    }

    public function storeInCheckout(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|string|max:255',
            'ward' => 'required|string|min:1|max:255',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255'
        ]);

        Address::create([
            'user_id' => auth()->user()->id,
            'address' => $request->address,
            'ward' => $request->ward,
            'district' => $request->district,
            'city' => $request->city,
        ]);

        return redirect()->back()->with('status', 'Address created successfully!');
    }


    public function show(Address $address)
    {
        //
    }


    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Address $address
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Address $address): RedirectResponse
    {
        $address->delete();
        return redirect()->back()->with('status', 'Address deleted successfully!');
    }
}
