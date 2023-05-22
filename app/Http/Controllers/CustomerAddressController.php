<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class CustomerAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $addresses = auth()->user()->userDetail->addresses;
        return view('customer.address.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'address' => 'required'
        ]);

        UserAddress::create([
            'address' => $request->address,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('address.index')->with('message', 'Created Successfully!');
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
        $address = UserAddress::find($id);
        $address->delete();

        return redirect()->route('address.index')->with('message', 'Deleted Successfully!');
    }

    public function activate($id){

        $user_address = UserDetail::where('user_id', auth()->user()->id);
        $user_address->update([
                'user_address_id' => $id
        ]);

        return redirect()->route('address.index')->with('message', 'Activated Successfully!');

    }
}
