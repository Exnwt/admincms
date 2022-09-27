<?php

namespace App\Http\Controllers;

use App\Models\produks;
use App\Models\produk_kategoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\authorize;
use App\Models\admins;


class produkcontroller extends Controller
{
    // public variable isi
    // panggil nya get($this nama variabel)

    public function produks(request $request){
        // dd($request->all());

        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeview = 2;
        $menuproduk = 1;
        $statuss = authorize::where('authorize_type_id',$authotypeview)->where('role_id',$userlog->roles_id)->where('menu_id', $menuproduk)->first('status');

        if($statuss->status == 1){   
            $produk = new produks;
            $produk->name=$request->name;
            $produk->code=$request->code;
            $produk->produk_kategori_id= $request->produk_kategori_id;
            $produk->price = $request->price;
            $produk->purchase_price = $request->purchase_price;
            $produk->short_description= $request->short_description;
            $produk->description= $request->description;
            $produk->save();
    
            return redirect('/produk');
        }
        else{
            return redirect('/NO_Authorize');
        }



    }
    
    public function create(){
        $listcategory = produk_kategoris::all();
        return view('/produk')->with('listcategory',$listcategory);
    }

    public function produkstab()
    {
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeview = 1;
        $menuproduk = 1;
        $statuss = authorize::where('authorize_type_id',$authotypeview)->where('role_id',$userlog->roles_id)->where('menu_id', $menuproduk)->first('status');

        if($statuss->status == 1){   
            $listcategory = produk_kategoris::all();
            $produk = produks::with('produk_kategori')->get();
            return view('/produk')->with('produk',$produk)->with('listcategory',$listcategory);
        }
        else{
            return redirect('/NO_Authorize');
        }

    }



    public function addprodukview(){
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeadd = 2;
        $menuproduk = 1;
        $statuss = authorize::where('authorize_type_id',$authotypeadd)->where('role_id',$userlog->roles_id)->where('menu_id',$menuproduk)->first    ('status');

        if($statuss->status == 1){   
            $listcategory = produk_kategoris::all();
            return view('add_produk')->with('listcategory',$listcategory);
        }
        else{
            return redirect('/NO_Authorize');
        }

    }

    public function addprodukcat(request $request){
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeadd = 2;
        $menuproduk = 2;
        $statuss = authorize::where('authorize_type_id',$authotypeadd)->where('role_id',$userlog->roles_id)->where('menu_id',$menuproduk)->first('status');
        if($statuss->status == 1){   
            $produkscat = new produk_kategoris;
            $produkscat->category = $request->category;
            $produkscat->description = $request->description;
            $produkscat->save();
            return redirect('/category');
        }
        else{
            return redirect('/NO_Authorize');
        }

    }

    public function categoryDelete($id){
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeadd = 4;
        $menuproduk = 2;
        $statuss = authorize::where('authorize_type_id',$authotypeadd)->where('role_id',$userlog->roles_id)->where('menu_id',$menuproduk)->first('status');
        if($statuss->status == 1){   
            $catedelete = produk_kategoris::find($id);
            $catedelete->delete();
            return redirect('/category');
        }
        else{
            return redirect('/NO_Authorize');
        }

    }

    public function produkDelete($id){
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeadd = 4;
        $menuproduk = 1;
        $statuss = authorize::where('authorize_type_id',$authotypeadd)->where('role_id',$userlog->roles_id)->where('menu_id',$menuproduk)->first('status');
        if($statuss->status == 1){   
            $delete = produks::find($id);
            $delete->delete();
            return redirect('/produk');
        }
        else{
            return redirect('/NO_Authorize');
        }

    }


    public function produkcat()
    {
        $autho = authorize::all();
        $userlog = auth()->user();
        $authotypeadd = 1;
        $menuproduk = 2;
        $statuss = authorize::where('authorize_type_id',$authotypeadd)->where('role_id',$userlog->roles_id)->where('menu_id',$menuproduk)->first('status');
        if($statuss->status == 1){   
            $produkscat= produk_kategoris::with('produks')->get();

            return view('produk_category')->with('produkcat',$produkscat);
        }
        else{
            return redirect('/NO_Authorize');
        }
        

    }




    
}
