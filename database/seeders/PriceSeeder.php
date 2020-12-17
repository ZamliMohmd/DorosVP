<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new Price();
        $city->name_ar = 'اشتراك شهري';
        $city->name_he = '';
        $city->name_en = 'month_sub';
        $city->token = time().'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9Sey';
        $city->price = 149;
        $city->instead_of = 179;
        $city->total_money = 179;
        $city->no_installments = 1;
        $city->user_id = null;
        $city->save();

        $city = new Price();
        $city->name_ar = 'اشتراك نصف سنوي';
        $city->name_he = '';
        $city->name_en = 'half_year_sub';
        $city->token = time().'wRJSMeKKF2QT4fwpMeJf36POk6yJVKadQssw5c';
        $city->price = 99;
        $city->instead_of = 139;
        $city->total_money = 499;
        $city->no_installments = 3;
        $city->user_id = null;
        $city->save();


        $city = new Price();
        $city->name_ar = 'اشتراك سنوي';
        $city->name_he = '';
        $city->name_en = 'year_sub';
        $city->token = time().'JzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvT';
        $city->price = 89;
        $city->instead_of = 129;
        $city->total_money = 979;
        $city->no_installments = 5;
        $city->user_id = null;
        $city->save();
    }

}
