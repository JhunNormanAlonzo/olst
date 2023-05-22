<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();

        return view('super-admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('super-admin.order.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'user_details_id' => 'required',
            'quantity' => 'required',
            'user_address_id' => 'required',
            'qrcode_link' => 'required',
        ]);

        Order::create([
            'user_id' => $request->user_id,
            'user_details_id' => $request->user_details_id,
            'quantity' => $request->quantity,
            'user_address_id' => $request->user_address_id,
            'qrcode_link' => $request->qrcode_link
        ]);

        return redirect()->route('order.index')->with('message', 'Create Successfully');
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
        $order = Order::find($id);
        return view('super-admin.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $this->validate($request, [
            'user_id' => 'required',
            'user_details_id' => 'required',
            'quantity' => 'required',
            'user_address_id' => 'required',
            'qrcode_link' => 'required',
        ]);

        $order->update([
            'user_id' => $request->user_id,
            'user_details_id' => $request->user_details_id,
            'quantity' => $request->quantity,
            'user_address_id' => $request->user_address_id,
            'qrcode_link' => $request->qrcode_link
        ]);

        return redirect()->route('order.index')->with('message', 'Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('order.index')->with('message', 'Deleted Successfully');
    }

    public function history(){

        $order = Order::where('status', 'done')->get();
        return view('super-admin.order.history', compact('order'));
    }
}
