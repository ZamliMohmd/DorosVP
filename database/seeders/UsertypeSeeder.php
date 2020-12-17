<?php

namespace Database\Seeders;

use App\Models\Usertype;
use Illuminate\Database\Seeder;

class UsertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usertype = new Usertype();
        $usertype->name_ar = 'مدير';
        $usertype->name_he = null;
        $usertype->save();

        $usertype = new Usertype();
        $usertype->name_ar = 'مشرف';
        $usertype->name_he = null;
        $usertype->save();

        $usertype = new Usertype();
        $usertype->name_ar = 'معلم';
        $usertype->name_he = null;
        $usertype->save();

        $usertype = new Usertype();
        $usertype->name_ar = 'طالب';
        $usertype->name_he = null;
        $usertype->save();
    }
}
