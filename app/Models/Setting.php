<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\User' , 'user_id' , 'id');
    }
}
