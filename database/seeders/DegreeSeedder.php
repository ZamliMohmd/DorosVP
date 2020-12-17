<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Seeder;

class DegreeSeedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degree = new Degree();
        $degree->name_ar = 'لقب أوّل';
        $degree->name_he = 'תואר ראשון';
       // $degree->user_id = null;
        $degree->save();

        $degree = new Degree();
        $degree->name_ar = 'لقب ثاني';
        $degree->name_he = 'תואר שני';
       // $degree->user_id = null;
        $degree->save();

        $degree = new Degree();
        $degree->name_ar = 'دكتوراه';
        $degree->name_he = 'דוקטורט';
       // $degree->user_id = null;
        $degree->save();

        $degree = new Degree();
        $degree->name_ar = 'شهاده تدريس';
        $degree->name_he = 'תעודת הוראה';
       // $degree->user_id = null;
        $degree->save();


        $degree = new Degree();
        $degree->name_ar = 'شهادة مهنية';
        $degree->name_he = 'לימודי תעודה';
       // $degree->user_id = null;
        $degree->save();


        $degree = new Degree();
        $degree->name_ar = 'شهاده ثانوية';
        $degree->name_he = 'תיכון';
       // $degree->user_id = null;
        $degree->save();
    }
}
