<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainspecialtie extends Model
{
    use HasFactory;

    public function subspecialties(){
        return $this->hasMany(Subspecialties::class , 'mainspecialtie_id' , 'id');
    }


}
