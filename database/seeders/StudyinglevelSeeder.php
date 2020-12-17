<?php

namespace Database\Seeders;

use App\Models\Studyinglevel;
use Illuminate\Database\Seeder;

class StudyinglevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studyinglevel = new Studyinglevel();
        $studyinglevel->name_ar = 'ابتدائية';
        $studyinglevel->name_he = 'יְסוֹדִי';
        $studyinglevel->user_id = null;
        $studyinglevel->save();

        $studyinglevel = new Studyinglevel();
        $studyinglevel->name_ar = 'اعدادية';
        $studyinglevel->name_he = 'חטיבת ביניים';
        $studyinglevel->user_id = null;
        $studyinglevel->save();

        $studyinglevel = new Studyinglevel();
        $studyinglevel->name_ar = 'ثانوية';
        $studyinglevel->name_he = 'בית ספר תיכון';
        $studyinglevel->user_id = null;
        $studyinglevel->save();

        $studyinglevel = new Studyinglevel();
        $studyinglevel->name_ar = 'جامعية';
        $studyinglevel->name_he = 'אוּנִיבֶרְסִיטָה';
        $studyinglevel->user_id = null;
        $studyinglevel->save();

        $studyinglevel = new Studyinglevel();
        $studyinglevel->name_ar = 'اخرى';
        $studyinglevel->name_he = 'אחרת';
        $studyinglevel->user_id = null;
        $studyinglevel->save();

    }
}
