<?php

namespace Database\Seeders;

use App\Models\Degree;
use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = new Gender();
        $gender->name_ar = 'ذكر';
        $gender->name_he = '.';
        $gender->user_id = null;
        $gender->save();

        $gender = new Gender();
        $gender->name_ar = 'انثى';
        $gender->name_he = '.';
        $gender->user_id = null;
        $gender->save();
    }
}
