<?php

namespace App\Http\Controllers;

use App\Models\produks;
use App\Models\produk_kategoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class produkcontroller extends Controller
{

    public function produks(request $request){
        // dd($request->all());
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
    
    public function create(){
        $listcategory = produk_kategoris::all();
        return view('/produk')->with('listcategory',$listcategory);
    }

    public function produkstab()
    {
        $listcategory = produk_kategoris::all();
        $produk = produks::with('produk_kategori')->get();
        return view('/produk')->with('produk',$produk)->with('listcategory',$listcategory);
    }

    public function addprodukview(){
        $listcategory = produk_kategoris::all();
        return view('add_produk')->with('listcategory',$listcategory);
    }

    public function addprodukcat(request $request){
        $produkscat = new produk_kategoris;
        $produkscat->category = $request->category;
        $produkscat->description = $request->description;
        $produkscat->save();

        return redirect('/category');

    }


    

    public function produkcat()
    {
        $produkscat= produk_kategoris::with('produks')->get();

        return view('produk_category')->with('produkcat',$produkscat);
    }




    
}
