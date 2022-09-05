<?php

namespace App\Models;
use App\Models\voucher_usages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vouchers extends Model
{
    use HasFactory;

    public function voucher_usages(){return $this->belongsTo(voucher_usages::class,'vouchers_id','id');}
}
