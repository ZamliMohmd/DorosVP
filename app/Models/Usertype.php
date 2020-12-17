<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    use HasFactory;


    public function users(){
        return $this->hasOne(User::class , 'usertype_id' , 'id' );
    }

}