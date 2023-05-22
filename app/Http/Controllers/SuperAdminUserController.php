<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class SuperAdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('super-admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('super-admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'address' => 'required',
            'gender' => 'required',
            'contact_number' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);


        $user = User::create([
            'name' => $request->firstname." ".$request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user_address = UserAddress::create([
            'address' => $request->address,
            'user_id' => $user->id
        ]);


        UserDetail::create([
            'user_id' => $user->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'contact_number' => $request->contact_number,
            'gender' => $request->gender,
            'user_address_id' => $user_address->id,
        ]);

        $role = Role::findByName($request->role);

        $user->assignRole($role);
        return redirect()->route('user.index')->with('message', 'Created Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user_detail = UserDetail::where('user_id', $id);
        $user_addresses = UserAddress::where('user_id', $id);

        $user->delete();
        $user_detail->delete();
        $user_addresses->delete();

        return redirect()->route('user.index')->with('message', 'Deleted Successfully!');
    }
}
