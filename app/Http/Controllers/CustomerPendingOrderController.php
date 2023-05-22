<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerPendingOrderController extends Controller
{
    public function index(){
        return view('customer.order.pending');

    }
}
