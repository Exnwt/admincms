<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\admins;

class role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function admins(){
        return $this->hasmany(admins::class,'roles_id','id');
    }
}