<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class SuperAdminTruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function createTrucks()
    {
//        Truck::factory()->count(10)->create();
    }

    public function index()
    {
        $trucks = Truck::orderBy('created_at', 'desc')
            ->paginate(5);
        return view('super-admin.truck.index', compact('trucks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super-admin.truck.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'plate_number' => 'required|unique:trucks'
        ]);

        Truck::create([
            'name' => $request->name,
            'description' => $request->description,
            'plate_number' => $request->plate_number
        ]);

        return redirect()->route('truck.index')->with('message', 'Created Successfully~');


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
        $truck  = Truck::find($id);
        $truck->delete();
        return redirect()->route('truck.index')->with('message', 'Deleted Successfully!');
    }
}
