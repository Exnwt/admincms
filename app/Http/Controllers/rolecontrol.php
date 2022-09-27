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
        $userlog = auth()->user();
        $authotype = 1;
        $menuu = 5;
        $statuss = authorize::where('authorize_type_id',$authotype)->where('role_id',$userlog->roles_id)->where('menu_id', $menuu)->first('status');

        if($statuss->status == 1){   
            $autho = authorize::all();
            $rolee = role::all();
            $menuu = menu::all();  
            $authotype = authorizeType::all(); 
            return view('role')->with('autho',$autho)->with('rolee',$rolee)->with('menuu',$menuu)->with('authotype',$authotype);
            return redirect('/produk');
        }
        else{
            return redirect('/NO_Authorize');
        }


    }

    public function noacces(){
        return view('noaccess');
    }
}
