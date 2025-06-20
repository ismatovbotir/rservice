<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Company extends Model
{
    use HasFactory,HasUuids;

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
