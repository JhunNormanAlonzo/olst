<?php

namespace App\Http\Livewire;

use App\Models\Truck;
use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $search = '';

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhereHas('userDetail', function($query){
                $query->where('contact_number', 'like', '%' . $this->search . '%');
            })->orWhereHas('addresses', function ($query){
                $query->where('address', 'like' , '%' . $this->search . '%');
            })
            ->paginate(5);

        return view('livewire.user-table', compact('users'));
    }
}
