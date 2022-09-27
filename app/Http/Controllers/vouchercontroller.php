<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addsvou;
use Carbon\Carbon;
use App\Models\vouchers;

class vouchercontroller extends Controller
{
    public function vourcherview(){
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeview = 1;
        $menuproduk = 4;
        $statuss = authorize::where('authorize_type_id',$authotypeview)->where('role_id',$userlog->roles_id)->where('menu_id', $menuproduk)->first('status');

        if($statuss->status == 1){   
            $vouc = vouchers::all();
            return view('vourcher')->with('vouc',$vouc);
        }
        else{
            return redirect('/NO_Authorize');
        }

    }

    public function addvoucherview(){
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeview = 2;
        $menuproduk = 4;
        $statuss = authorize::where('authorize_type_id',$authotypeview)->where('role_id',$userlog->roles_id)->where('menu_id', $menuproduk)->first('status');

        if($statuss->status == 1){   
            return view('add_voucher');
        }
        else{
            return redirect('/NO_Authorize');
        }

    }

    public function addsvou(request $request){
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeview = 2;
        $menuproduk = 4;
        $statuss = authorize::where('authorize_type_id',$authotypeview)->where('role_id',$userlog->roles_id)->where('menu_id', $menuproduk)->first('status');

        if($statuss->status == 1){   
            if(!$request->filled('code')) throw new \Exception('Code field must be filled');
            if(!$request->filled('type') || $request->type == '0') throw new \Exception('Type field must be filled');
            if(!$request->filled('disc_value') || $request->disc_value < 1) throw new \Exception('Discount Value field must be filled');
            if(!$request->filled('start_date')) throw new \Exception('Start Date field must be filled');
            if(!$request->filled('end_date')) throw new \Exception('End Date field must be filled');

            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);
            if($startDate->gt($endDate)) throw new \Exception('Start Date cannot be greater than End Date');

            if($request->type == '2' && ($request->disc_value < 0 || $request->disc_value > 100)) throw new \Exception('Discount value not valid for percentage type');


            if($request->filled('id')) {
                $voucher = vouchers::where('id',$request->id)->first();
                if($voucher->code != $request->code) {
                    $check = vouchers::where('code',$request->code)->first();
                    if($check) throw new \Exception('Code already exist');
                }
            } else {
                $voucher = new vouchers;
                $check = Vouchers::where('code',$request->code)->first();
                if($check) throw new \Exception('Code already exist');
            }





        $voucher = new vouchers;
        $voucher->code= $request->code;
        $voucher->type = $request->type;
        $voucher->disc_value = $request->disc_value;
        $voucher->start_date=$request->start_date;
        $voucher->end_date=$request->end_date;
        $voucher->status = true;
        $voucher->save();

        return redirect('vourcher');
        }
        else{
            return redirect('/NO_Authorize');
        }


    }

    
}
