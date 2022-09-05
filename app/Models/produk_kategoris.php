<?php

namespace App\Models;
use App\Models\produks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_kategoris extends Model
{
    use HasFactory;
    protected $fillable = ['id','category','description',];

    protected $guarded =[];

    public function produks(){return $this->hasmany(produks::class,'produk_kategori_id','id');}


}
