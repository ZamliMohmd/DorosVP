<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subspecialties extends Model
{
    use HasFactory;


    public function mainspecialties(){
        return $this->belongsTo(Mainspecialtie::class, 'mainspecialtie_id' , 'id');
    }


}
