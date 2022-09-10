<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\produks;
use App\Models\vouchers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/produk/get/all',function(){
    return response()->json(produks::all());
});

route::get('voucher/get/all',function(){
    return response()->json(vouchers::all());
});
