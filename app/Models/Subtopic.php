<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    use HasFactory;

    public function maintopics(){
        return $this->belongsTo(Maintopic::class, 'maintopic_id' , 'id');
    }

    public function studentsubtopic()
    {
        return $this->belongsToMany(Student::class , 'student_subtopics' , 'student_id' , 'subtopic_id');
    }

    public function teachersubtopic()
    {
        return $this->belongsToMany(Teacher::class , 'teacher_topics' , 'teacher_id' , 'subtopic_id');
    }

}
