<?php

namespace App\Http\Controllers;
use App\Models\detail_transaksi;
use App\Models\produks;
use App\Models\vouchers;
use Illuminate\Http\Request;


class transactioncontroller extends Controller
{
    public function transcustview(){
        return view('add_transaction');
    }

    public function savetranscust(request $request){
        
        $savtran = new detail_transaksi;
        $savtran->transaction_id=$request->transaction_id;
        $savtran->product_id=$request->product_id;
        $savtran->qty=$request->qty;
        $savtran->price_satuan=$request->price_satuan;
        $savtran->price_total=$request->price_total;
        $savtran->price_purchase_satuan=$request->price_purchase_satuan;
        $savtran->price_purchase_total=$request->price_purchase_total;
        $savtran=save();

        return redirect('/save_trans_items');
    }

    public function create(){
        $listitem = produks::all();
        return view('add_trans_items')->with('listitem',$listitem);
    }

    public function additemsview(produks $produks){
        $listitem = produks::all();
        $listvou = vouchers::all();
        // $pricee = produks::where($listitem->id)->price;

        return view('/add_trans_items')->with('listitem',$listitem)->with('listvou',$listvou);

    }


    
}
