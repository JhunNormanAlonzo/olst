<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderTable extends Component
{
    public function render()
    {
        $orders = Order::paginate(5);
        return view('livewire.order-table', compact('orders'));
    }
}
