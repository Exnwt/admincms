<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactioncontroller extends Controller
{
    public function addtrans(){
        return view('add_transaction');
    }
}
