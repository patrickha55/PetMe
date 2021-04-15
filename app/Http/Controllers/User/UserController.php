<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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

    public function show(User $user)
    {
        return view('user.show')->with('user', $user);
    }

    public function edit(User $user)
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
     * @param User $user
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        if ($request->email == $user->email){
            $this->validate($request,[
                'firstName' => ['string', 'max:255'],
                'lastName' => ['string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'userName' => ['required', 'max:255'],
                'gender' => ['required'],
                'phoneNumber' => ['required','regex:/^[0-9]{10,11}$/i'],
                'img' => 'image|nullable|max:1999',
                'address' => 'string|nullable|max:255',
                'ward' => 'string|nullable|max:255',
                'district' => 'string|nullable|max:255',
                'city' => 'string|nullable|max:255'
            ]);
        } else {
            $this->validate($request,[
                'firstName' => ['string', 'max:255'],
                'lastName' => ['string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'userName' => ['required', 'max:255'],
                'gender' => ['required'],
                'phoneNumber' => ['required','regex:/^[0-9]{10,11}$/i'],
                'img' => 'image|nullable|max:1999',
                'address' => 'string|nullable|max:255',
                'ward' => 'string|nullable|max:255',
                'district' => 'string|nullable|max:255',
                'city' => 'string|nullable|max:255'
            ]);
        }

        /* Xu ly up anh */

        if ($request->hasFile('img')) {
            $fileNameToStore = User::uploadImg($request);
            $path = $request->file('img')->storeAs('public/Image/user/', $fileNameToStore);
        } else {
            $fileNameToStore = 'user_default.png';
        }


        User::find($user->id)->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'userName' => $request->userName,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'img' => $fileNameToStore
        ]);

        if ($request->address && $request->ward && $request->district && $request->city != null){
            Address::updateOrCreate(['user_id' => $user->id], [
                'address' => $request->address, 
                'ward' => $request->ward, 
                'district' => $request->district, 
                'city' => $request->city]
            );
        }

        return redirect()->route('user.show', $user)->with('status', 'Profile updated successfully!');
    }
}
