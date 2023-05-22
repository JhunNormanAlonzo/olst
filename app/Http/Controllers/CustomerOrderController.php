<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_address_id' => 'required',
            'quantity' => 'required',
            'user_remarks' => 'required'
        ]);

        $qrcode_link = Str::random('15').date('YmdHis');

        $data = [
            'user_id' => $request->user_id,
            'user_detail_id' => $request->user_detail_id,
            'user_address_id' => $request->user_address_id,
            'quantity' => $request->quantity,
            'user_remarks' => $request->user_remarks,
            'qrcode_link' => $qrcode_link
        ];

        Order::create($data);

        return redirect()->route('order.create')->with('message', 'Requested Successfully!');
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
