<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degree = new Day();
        $degree->name_ar = 'الاحد';
        $degree->name_he = '';
        $degree->save();

        $degree = new Day();
        $degree->name_ar = 'الاثنين';
        $degree->name_he = '';
        $degree->save();

        $degree = new Day();
        $degree->name_ar = 'الثلاثاء';
        $degree->name_he = '';
        $degree->save();

        $degree = new Day();
        $degree->name_ar = 'الاربعاء';
        $degree->name_he = '';
        $degree->save();

        $degree = new Day();
        $degree->name_ar = 'الخميس';
        $degree->name_he = '';
        $degree->save();

        $degree = new Day();
        $degree->name_ar = 'الجمعة';
        $degree->name_he = '';
        $degree->save();

        $degree = new Day();
        $degree->name_ar = 'السبت';
        $degree->name_he = '';
        $degree->save();
    }
}
