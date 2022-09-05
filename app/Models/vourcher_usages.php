<?php

namespace App\Models;

use App\Models\transaksi;
use App\Models\vouchers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vourcher_usages extends Model
{
    use HasFactory;

    public function transaksi(){return $this->hasmany(transaksi::class,'transactions_id','id');}

    public function vouchers(){return $this->hasmany(vouchers::class,'vouchers_id','id');}
}
