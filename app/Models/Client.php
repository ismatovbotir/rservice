<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Client extends Model
{
    use HasFactory, HasUuids;
    public $guarded=[];

    public function companies(){

        return $this->hasMany(Company::class);

    }
}
