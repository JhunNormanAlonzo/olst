<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/super-admin/truck/getTrucks', [\App\Http\Controllers\Api\TruckController::class, 'index']);
Route::put('/super-admin/truck/{id}', [\App\Http\Controllers\Api\TruckController::class, 'update'])->name('trucks.update');
Route::delete('/super-admin/truck/{id}', [\App\Http\Controllers\Api\TruckController::class, 'destroy'])->name('trucks.destroy');


Route::get('/super-admin/driver/getUsers', [\App\Http\Controllers\Api\UserController::class, 'index']);

