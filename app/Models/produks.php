<?php

namespace App\Models;
use App\Models\produk_kategoris;
use App\models\detail_transaksi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class produks extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','code','produk_kategori_id','price','purchase_price','short_description','description','status','new_product','best_seller','featured'];

    protected $guarded =[];



    public function produk_kategori(){
        return $this->belongsTo(produk_kategoris::class,'produk_kategori_id','id');
    }
    
    public function detail_transaksi(){ return $this->belongsTo(detail_transaksi::class,'product_id','id');}
}
