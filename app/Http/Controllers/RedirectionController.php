<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function go(){
        $role = auth()->user()->getRoleNames()->first();

        if ($role == 'super-admin'){
            return redirect()->route('super-admin.index');
        }elseif ($role == 'driver'){
            return redirect()->route('');
        }elseif ($role == 'customer'){
            return redirect()->route('customer.index');
        }
    }
}
