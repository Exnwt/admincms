<?php

namespace App\Models;
use App\Model\detail_transaksi;
use App\Model\voucher_usages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    public function detail_transaksi(){return $this->hasmany(detail_transaksi::class, 'transactions_id','id' );}

    public function voucher_usages(){return $this->hasmany(voucher_usages::class,'transactions_id','id');}
}
