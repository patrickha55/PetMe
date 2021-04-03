<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use \Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }

    public function show(\App\User $user)
    {
        return view('user.show')->with('user', $user);
    }

    public function edit(\App\User $user)
    {
        return view('user.edit')->with('user', $user);
    }

    public function editPassword()
    {
        return view('user.change_password');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\User $user
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, \App\User $user): RedirectResponse
    {
        $this->validate($request,[
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'userName' => ['required', 'max:255'],
            'gender' => ['required'],
            'phoneNumber' => ['required','regex:/^[0-9]{10,11}$/i'],
            'address' => 'required',
            'ward' => 'required|numeric|min:1|max:30',
            'district' => 'required',
            'city' => 'required'
        ]);

        User::find($user->id)->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'userName' => $request->userName,
            'gender' => $request->gender,
            'email' => $request->email,
            'phoneNumber' => $request->phone,
        ]);

        Address::find($user->address->id)->update([
            'address' => $request->address,
            'ward' => $request->ward,
            'district' => $request->district,
            'city' => $request->city,
        ]);

        return redirect()->route('user.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     *

    public function destroy($id)
    {
        //
    }*/
}
