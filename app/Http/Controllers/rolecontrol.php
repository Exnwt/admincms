<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authorize;
use App\Models\role;
use App\Models\menu;
use App\Models\authorizeType;

class rolecontrol extends Controller
{
    public function view(){
        $autho = authorize::all();
        $rolee = role::all();
        $menuu = menu::all();  
        $authotype = authorizeType::all(); 
        return view('role')->with('autho',$autho)->with('rolee',$rolee)->with('menuu',$menuu)->with('authotype',$authotype);

    }
}
