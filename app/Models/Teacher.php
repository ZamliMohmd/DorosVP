<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id' );
    }

    public function subtopic()
    {
        return $this->belongsToMany(Subtopic::class , 'teacher_topics', 'teacher_id' , 'subtopic_id');
    }

    //public function city(){
       // return $this->belongsTo(City::class , 'city_id' , 'id' );
  //  }

    public function cities(){
        return $this->belongsToMany(City::class , 'teacher_cities' , 'teacher_id' , 'cities_id');
    }
}
