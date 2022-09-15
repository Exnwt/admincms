<?php

namespace App\Http\Controllers;
use App\Models\detail_transaksi;
use App\Models\transaksi;
use App\Models\produks;
use App\Models\vouchers;
use Illuminate\Http\Request;
use Carbon\Carbon;


class transactioncontroller extends Controller
{
    public function transcustview(){
        return view('add_transaction');
    }

    public function savetranscust(request $request){
        // {{ \Carbon\Carbon::parse($pp->start_date)->format('d M Y') }}

        $savtransak = new transaksi;
        $savtransak->id;

        $savtransak->customer_name = $request->customer_name;
        $savtransak->customer_email=$request->customer_email;
        $savtransak->customer_phone=$request->customer_phone;
        $savtransak->sub_total =$request->sub_total;
        $savtransak->total = $request->total;
        $savtransak->additional_request =$request->additional_request;
        $savtransak->total_purchase=$request->total_purchase;
        $savtransak->payment_method=$request->payment_method;
        $savtransak->status = $request->status;
        $savtransak->save();
        $savtransak->transaction_id = 'TR-'.Carbon::now()->format('ymd').'-'.$savtransak->id;
        $savtransak->save();


        for ($i = 0; $i < count($request->product_id); $i++) {
            if ($request->qty[$i] !== "0") {
                detail_transaksi::create([
                    'transaction_id' => $savtransak->id,
                    'product_id' => $request->product_id[$i],
                    'qty' => $request->qty[$i],
                    'price_satuan' => $request->price_satuan[$i],
                    'price_total' => $request->price_total[$i], 
                    'price_purchase_satuan' => $request->price_purchase_satuan[$i],
                    'price_purchase_total' => $request->price_purchase_total[$i],
                ]);

            }
        }


        return redirect('/tables');
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

    public function listtrans(){
        $listtrans = transaksi::all();
        return view('tables')->with('listtrans',$listtrans);
    }





    
}
