<?php

namespace App\Http\Livewire;

use App\Models\Truck;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerAddressTable extends Component
{
    public $search;
    public function render()
    {
        $id = Auth::user()->id;
        $addresses = UserAddress::where('user_id' ,$id)
            ->where('address', 'like', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.customer-address-table', compact('addresses'));
    }
}
