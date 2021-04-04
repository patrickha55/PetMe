<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    //Hiện list ở UserManagement, Customer
    public function index()
    {
        $customers = User::whereRoleIs('user')->paginate(10);
        return view('admin.user-management.show.showCustomers')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user-management.create.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'userName' => ['required', 'max:255'],
            'dob' => ['required'],
            'gender' => ['required', 'max:1'],
            'phoneNumber' => ['required','regex:/^[0-9]{10,11}$/i']
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'userName' => $request->userName,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phoneNumber' => $request->phoneNumber,
        ]);

        $user->attachRole('user');

        return redirect('/admin/user-management/users')->with('status', 'Account created successfully!');
    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show(User $user)
    {
        // $user = User::where('id',$id)->get();
        return view('admin.user-management.show.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('admin.user-management.edit.edit_user')->with('user', $user);
    }


    public function update(Request $request, User $user)
    {
        if ($request->email == $user->email){
            $this->validate($request,[
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'dob' => ['required'],
                'gender' => ['required', 'max:1'],
                'phoneNumber' => ['required','regex:/^[0-9]{10,11}$/i']
            ]);
        } else {
            $this->validate($request, [
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'dob' => ['required'],
                'gender' => ['required', 'max:1'],
                'phoneNumber' => ['required','regex:/^[0-9]{10,11}$/i']
            ]);
        }

        if ($request->userName == $user->userName){
            $this->validate($request, [
                'userName' => ['required', 'max:255'],
            ]);
        } else {
            $this->validate($request, [
                'userName' => ['required', 'max:255', 'unique'],
            ]);
        }

        User::find($user->id)->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'userName' => $request->userName,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
        ]);

        return redirect()->route('users.show', $user)->with('status', 'Account updated successfully!');
    }

    public function ban(User $user){
        User::find($user->id)->update(['active' => 0 ]);

        return redirect()->back()->with('status', 'Account banned successfully!');
    }

    public function destroy(User $user)
    {
        dd($user);
        $user->delete();
        $user->address->delete();
        $user->reviews->delete();

        return redirect()->back()->with('status', 'Account deleted successfully!');
    }
}
