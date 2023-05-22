<?php

use App\Events\CarMoved;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (auth()->check()){
        return redirect()->route('home');
    }else{
        return view('auth.login');
    }

});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\RedirectionController::class, 'go'])->name('home');
//Route::get('/test', [\App\Http\Controllers\SuperAdminQrCodeController::class, 'generateQrCode']);

Route::group(['middleware' => ['role:super-admin']], function (){
    Route::get('/super-admin/super-admin-order/history', [\App\Http\Controllers\SuperAdminOrderController::class, 'history'])->name('super-admin-order.history');


    Route::resource('/super-admin/driver', \App\Http\Controllers\SuperAdminDriverController::class);
    Route::resource('/super-admin/truck', \App\Http\Controllers\SuperAdminTruckController::class);
    Route::resource('/super-admin/user', \App\Http\Controllers\SuperAdminUserController::class);
   Route::resource('/super-admin/super-admin-order', \App\Http\Controllers\SuperAdminOrderController::class);
   Route::resource('/super-admin', \App\Http\Controllers\SuperAdminController::class);
});

Route::group(['middleware' => ['role:customer']], function(){

    Route::get('/customer/order_history', [\App\Http\Controllers\CustomerController::class, 'order_history'])->name('customer.order_history');
    Route::resource('/customer/order', \App\Http\Controllers\CustomerOrderController::class);
    Route::resource('/customer/pending-order', \App\Http\Controllers\CustomerPendingOrderController::class);
    Route::put('/customer/address/{id}', [\App\Http\Controllers\CustomerAddressController::class, 'activate'])->name('address.activate');
    Route::resource('/customer/address', \App\Http\Controllers\CustomerAddressController::class);
    Route::resource('/customer', \App\Http\Controllers\CustomerController::class);
});


Route::get('/track-order/qrcode/{qrcode_link}', [\App\Http\Controllers\SuperAdminQrCodeController::class, 'trackOrderQrCode'])->name('track.order.qrcode');

Route::get('/map', function(){
    return view('map.index');
});

Route::get('/moved', function(){
    event(new CarMoved(14.6978383, 121.022031));
});


Route::get('/location', function (){
   return view('map.location');
});
