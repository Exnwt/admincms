<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\admins;

class loginscontroller extends Controller
{
    public function login(){
        return view('login');
    }

    public function logincek(request $test){
        if(Auth::attempt($test->only('username','password'))){
            return redirect('index');
        }
        return redirect('/'); 
    }
}

