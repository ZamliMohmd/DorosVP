<?php

namespace Database\Seeders;

use App\Models\Mainspecialtie;
use Illuminate\Database\Seeder;

class MainspecialtieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainspecialtie = new Mainspecialtie();
        $mainspecialtie->name_ar = 'الهندسة';
        $mainspecialtie->name_he = 'הנדסה';
        $mainspecialtie->user_id = null;
        $mainspecialtie->save();

        $mainspecialtie = new Mainspecialtie();
        $mainspecialtie->name_ar = 'العلوم الصحية';
        $mainspecialtie->name_he = 'מדעי הבריאות';
        $mainspecialtie->user_id = null;
        $mainspecialtie->save();

        $mainspecialtie = new Mainspecialtie();
        $mainspecialtie->name_ar = 'علم الاجتماع والإدارة';
        $mainspecialtie->name_he = 'מדעי החברה והניהול';
        $mainspecialtie->user_id = null;
        $mainspecialtie->save();

        $mainspecialtie = new Mainspecialtie();
        $mainspecialtie->name_ar = 'العلوم';
        $mainspecialtie->name_he = 'מדעים הטבע';
        $mainspecialtie->user_id = null;
        $mainspecialtie->save();
    }
}
