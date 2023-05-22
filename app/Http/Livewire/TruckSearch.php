<?php

namespace App\Http\Livewire;

use App\Models\Truck;
use Livewire\Component;

class TruckSearch extends Component
{
    public $search = '';

    public function render()
    {
        $trucks = Truck::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->orWhere('plate_number', 'like', '%' . $this->search . '%')
            ->orWhere('status', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('livewire.truck-search', compact('trucks'));
    }
}
