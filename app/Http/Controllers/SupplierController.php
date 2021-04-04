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
            'email' => 'required|email|string|unique:suppliers|max:225',
            'phone_1' => 'required|numeric|regex:/^[0-9]{10,11}$/i',
            'phone_2' => 'required|numeric|nullable|regex:/^[0-9]{10,11}$/i',
            'website' => 'required|string|regex:/^[-\w\d@:%._\+~#=]{1,200}\.[\w\d()]{1,50}\b([\w\d()@:%_\+.~#?&=]*)$/i',
            'address' => 'required|string|nullable|max:255',
            'ward' => 'required|string|nullable|max:255',
            'district' => 'required|string|nullable|max:255',
            'city' => 'required|string|nullable|max:255',
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

        return redirect()->route('supplier.index')->with('status', 'Supplier added successfully!');
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

    public function edit(Supplier $supplier)
    {
        return view('admin.product-management.supplier.edit')->with('supplier', $supplier);
    }

    public function update(Request $request, Supplier $supplier)
    {
        if ($request->website == $supplier->website){
            $this->validate($request, [
                'name' => 'required|string|max:225',
                'phone_1' => 'required|numeric|regex:/^[0-9]{10,11}$/i',
                'phone_2' => 'required|numeric|nullable|regex:/^[0-9]{10,11}$/i',
                'website' => 'required|string|regex:/^[-\w\d@:%._\+~#=]{1,200}\.[\w\d()]{1,50}\b([\w\d()@:%_\+.~#?&=]*)$/i',
                'address' => 'required|string|nullable|max:255',
                'ward' => 'required|string|nullable|max:255',
                'district' => 'required|string|nullable|max:255',
                'city' => 'required|string|nullable|max:255',
            ]);
        }

        if ($request->website != $supplier->website){
            $this->validate($request, [
                'website' => 'required|string|unique:suppliers|regex:/^[-\w\d@:%._\+~#=]{1,200}\.[\w\d()]{1,50}\b([\w\d()@:%_\+.~#?&=]*)$/i',
            ]);
        }

        if ($request->email != $supplier->email){
            $this->validate($request, [
                'email' => 'required|email|string|unique:suppliers|max:225',
            ]);
        } else {
            $this->validate($request, [
                'email' => 'required|email|string|max:225',
            ]);
        }

        Supplier::find($supplier->id)->update([
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

        return redirect()->route('supplier.index')->with('status', 'Supplier updated successfully!');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        if ($supplier->has('product')){
            $supplier->product->delete();
        }

        return redirect()->back()->with('status', 'Supplier deleted successfully!');
    }
}
