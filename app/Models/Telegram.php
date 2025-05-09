<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Telegram extends Model
{
    use HasFactory;
    public $incrementing=false;
    //protected $keyType='int';
    //protected $primaryKey='id';
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
