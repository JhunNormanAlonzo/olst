<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class SuperAdminDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('super-admin.driver.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super-admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $data = [
            'name' => $request->firstname." ".$request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $user = User::create($data);

        UserDetail::create([
            'user_id' => $user->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'gender' => $request->gender,
        ]);

        return redirect()->route('driver.index')->with('message', 'Created Successfully!');


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
        //
    }
}
