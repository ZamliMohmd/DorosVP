<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintopic extends Model
{
    use HasFactory;

    public function subtopics(){
        return $this->hasMany(Subtopic::class , 'maintopic_id' , 'id');
    }


}
