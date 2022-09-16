<?php

namespace App\Models;

use App\Models\transaksi;
use App\Models\produks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id','product_id','qty','price_satuan','price_total','price_purchase_satuan','price_purchase_total'];

    protected $guarded =[];

    public function transaksi(){
        return $this->belongsTo(transaksi::class,'transaction_id','id');
    }

    public function produks(){
        return $this->belongsTo(produks::class,'product_id','id');
    }
}
