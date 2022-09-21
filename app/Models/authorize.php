<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\role;
use App\Models\authorizeType;
use App\Models\menu_id;

class authorize extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','authorize_type_id', 'menu_id'];
    protected $guarded = ['id'];

    
    public function role(){
        return $this->belongsTo(role::class,'role_id','id');
    }

    public function authorizetype(){
        return $this->belongsTo(authorizeType::class,'authorize_type_id','id');
    }

    public function menuus(){
        return $this->belongsTo(menu::class,'menu_id','id');
    }
}
