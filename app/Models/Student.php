<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id' );
    }

    public function subtopic()
    {
        return $this->belongsToMany(Subtopic::class , 'student_subtopics', 'student_id' , 'subtopic_id');
    }

    public function city(){
        return $this->belongsTo(City::class , 'city_id' , 'id' );
    }
}
