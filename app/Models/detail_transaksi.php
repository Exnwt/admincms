<?php

namespace App\Models;

use App\Models\transaksi;
use App\Models\produks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;

    public function transaksi(){
        return $this->belongsTo(transaksi::class,'transactions_id','id');
    }

    public function produks(){
        return $this->hasmany(produks::class,'products_id','id');
    }
}
