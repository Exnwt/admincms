<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginscontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\transactioncontroller;
use App\Http\Controllers\vouchercontroller;
use App\Http\Controllers\rolecontrol;


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

route::get('/',[loginscontroller::class,'login'])->name('login');

route::post('/logincek',[loginscontroller::class,'logincek']);

route::get('/index', function(){
    return view ('index');
});


route::get('/produk',[produkcontroller::class,'produkstab'])->middleware('auth');
route::get('/add_produk',[produkcontroller::class,'addprodukview'])->middleware('auth');
route::post('/savproduk',[produkcontroller::class,'produks'])->middleware('auth');
route::get('/produk/delete/{id}',[produkcontroller::class,'produkDelete'])->middleware('auth');


route::get('/category',[produkcontroller::class,'produkcat'])->middleware('auth');
route::post('/addcat',[produkcontroller::class,'addprodukcat'])->middleware('auth');
route::get('/categorydel/{id}',[produkcontroller::class,'categoryDelete'])->middleware('auth');

route::get('/tables',[transactioncontroller::class,'listtrans'])->middleware('auth');
route::get('/add_transaction',[transactioncontroller::class,'transcustview'])->middleware('auth');
route::post('/save_transaction',[transactioncontroller::class,'savetranscust'])->middleware('auth');
route::get('/add_itemsview',[transactioncontroller::class,'additemsview'])->middleware('auth');
route::get('/find_price',[transactioncontroller::class,'findprice'])->middleware('auth');
route::post('/save_trans_items',[transactioncontroller::class,'savetranscust'])->middleware('auth');


route::get('detail/transaction/{id}',[transactioncontroller::class,'detailsView'])->middleware('auth');


route::get('/vourcher',[vouchercontroller::class,'vourcherview'])->middleware('auth');
route::get('/add_voucher',[vouchercontroller::class,'addvoucherview'])->middleware('auth');
route::post('/addsvou',[vouchercontroller::class,'addsvou'])->middleware('auth');


route::get('/roles',[rolecontrol::class,'view']);

route::get('/NO_Authorize',[rolecontrol::class,'noacces']);
// route::get('/produk',function(){
//     return view ('produk');
// });

// route::get('/login',[logincontroller::class,'login']);

// route::post('/post',[dashboardcontroller::class,'post'])->middleware(['cekbanned']);