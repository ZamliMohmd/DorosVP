<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experience = new Experience();
        $experience->name_ar = 'تعليم طلاب مدارس';
        $experience->name_he = '.';
        $experience->user_id = null;
        $experience->save();

        $experience = new Experience();
        $experience->name_ar = 'تحضير لبسيخومتري';
        $experience->name_he = '.';
        $experience->user_id = null;
        $experience->save();

        $experience = new Experience();
        $experience->name_ar = 'تحضير لبجروت';
        $experience->name_he = '.';
        $experience->user_id = null;
        $experience->save();

        $experience = new Experience();
        $experience->name_ar = 'تحضير لامتحانات';
        $experience->name_he = '.';
        $experience->user_id = null;
        $experience->save();


        $experience = new Experience();
        $experience->name_ar = 'محاضر';
        $experience->name_he = '.';
        $experience->user_id = null;
        $experience->save();

        $experience = new Experience();
        $experience->name_ar = 'معيد';
        $experience->name_he = '.';
        $experience->user_id = null;
        $experience->save();

    }
}
