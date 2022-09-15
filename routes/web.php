<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginscontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\transactioncontroller;
use App\Http\Controllers\vouchercontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// route::get('/', function(){
//     return view ('login');
// });

route::get('/',[loginscontroller::class,'login']);

route::post('/logincek',[loginscontroller::class,'logincek']);

route::get('/index', function(){
    return view ('index');
});


route::get('/produk',[produkcontroller::class,'produkstab']);
route::get('/add_produk',[produkcontroller::class,'addprodukview']);
route::post('/savproduk',[produkcontroller::class,'produks']);
route::get('/produk/delete/{id}',[produkcontroller::class,'produkDelete']);


route::get('/category',[produkcontroller::class,'produkcat']);
route::post('/addcat',[produkcontroller::class,'addprodukcat']);
route::get('/categorydel/{id}',[produkcontroller::class,'categoryDelete']);

route::get('/tables',[transactioncontroller::class,'listtrans']);
route::get('/add_transaction',[transactioncontroller::class,'transcustview']);
route::post('/save_transaction',[transactioncontroller::class,'savetranscust']);
route::get('/add_itemsview',[transactioncontroller::class,'additemsview']);
route::get('/find_price',[transactioncontroller::class,'findprice']);
route::post('/save_trans_items',[transactioncontroller::class,'savetranscust']);



route::get('/vourcher',[vouchercontroller::class,'vourcherview']);
route::get('/add_voucher',[vouchercontroller::class,'addvoucherview']);
route::post('/addsvou',[vouchercontroller::class,'adds  vou']);
// route::get('/produk',function(){
//     return view ('produk');
// });

// route::get('/login',[logincontroller::class,'login']);

// route::post('/post',[dashboardcontroller::class,'post'])->middleware(['cekbanned']);