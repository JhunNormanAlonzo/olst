<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TruckResource;
use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function index(){
        $paginate = request('paginate', 5);
        $search_term = request('q', '');


        $trucks = Truck::search(trim($search_term))
            ->orderBy('id', 'desc')
            ->paginate($paginate);
        return TruckResource::collection($trucks);
    }

    public function update(Request $request, $id)
    {
        $truck = Truck::find($id);
        dd($truck);

        if (!$truck) {
            return response()->json(['error' => 'Truck not found'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'plate_number' => 'required',
        ]);

        $truck->name = $validatedData['name'];
        $truck->description = $validatedData['description'];
        $truck->plate_number = $validatedData['plate_number'];
        $truck->save();

        return response()->json(['message' => 'Truck updated successfully']);
    }


    public function destroy(Truck $truck){
        dd("test");
    }
}
