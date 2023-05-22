<?php

namespace App\Http\Controllers;




use App\Models\Order;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SuperAdminQrCodeController extends Controller
{
    public function generateQrCode(){
        $url = request()->getSchemeAndHttpHost();

        return view('admin', compact('url'));
    }

    public function trackOrderQrCode($qrcode_link){
        $order = Order::where('qrcode_link', $qrcode_link)->first();

        return view('track.index', compact('order'));
    }
}
