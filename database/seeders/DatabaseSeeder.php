<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CitySeeder::class,
            DegreeSeedder::class,
            GenderSeeder::class,
            MainspecialtieSeeder::class,
            MaintopicSeedder::class,
            SubspecialtiesSeeder::class,
            SubtopicSeeder::class,
            UniversitySeeder::class,
            UsertypeSeeder::class,
            StudyinglevelSeeder::class,
      //      ExperienceSeeder::class,
            PriceSeeder::class,
            DaySeeder::class
        ]);
    }
}
