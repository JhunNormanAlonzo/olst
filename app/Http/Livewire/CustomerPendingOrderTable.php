<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerPendingOrderTable extends Component
{

    public function render()
    {
        $pendings = Auth::user()->orders()
            ->where('status', 'pending')
            ->paginate(5);
        $url = request()->getSchemeAndHttpHost();
        return view('livewire.customer-pending-order-table', compact('pendings', 'url'));
    }
}
