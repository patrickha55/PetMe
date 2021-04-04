<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    public function index()
    {
        $suppliers = Supplier::paginate(10);
        return view('admin.product-management.supplier.index')->with('suppliers', $suppliers);
    }


    public function create()
    {
        return view('admin.product-management.supplier.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:225',
            'email' => 'required|email|string|unique|max:225',
            'phone_1' => 'required|numeric|regex:/^[0-9]{10,11}$/i',
            'phone_2' => 'numeric|nullable|regex:/^[0-9]{10,11}$/i',
            'website' => 'required|string|regex:/^[-\w\d@:%._\+~#=]{1,200}\.[\w\d()]{1,50}\b([\w\d()@:%_\+.~#?&//=]*)$/i',
            'address' => 'string|nullable|max:255',
            'ward' => 'string|nullable|max:255',
            'district' => 'string|nullable|max:255',
            'city' => 'string|nullable|max:255',
        ]);

        Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_1' => $request->phone_1,
            'phone_2' => $request->phone_2,
            'website' => $request->website,
            'address' => $request->address,
            'ward' => $request->ward,
            'district' => $request->district,
            'city' => $request->city,
        ]);

        return redirect()->route('users.index')->with('status', 'Supplier added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
