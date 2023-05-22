<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active_order = Order::where('user_id', auth()->user()->id)->where('status', 'accepted')->count();
        $pending = Order::where('user_id', auth()->user()->id)->where('status', 'pending')->count();
        $order_history = Order::where('user_id', auth()->user()->id)->where('status', 'done')->count();
        $address = UserAddress::where('user_id', auth()->user()->id)->count();
        return view('customer.index', compact('address', 'active_order', 'pending', 'order_history'));
    }

    public function order_history(){
        return view('customer.order_history');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
