<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    public function student(){
        return $this->hasOne(Student::class , 'city_id' , 'id' );
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }

}
