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
        // 4.   Create a relationship: Random has many Breakdowns
        // 5.   Create a loop (random number of iterations from 5-10) and inside that, ...

        // ... we need to generate a random name for its value which we
        // will save in Random(table) ...
        $randoms = \App\Models\Random::factory(\rand(5, 10))->create();

        $randoms->map(function ($random) {
            // ... together with another loop (random number of iterations from 5-10)
            // that will generate a random 5-character ( alphanumeric ) string
            // for the breakdown (table)
            \App\Models\Breakdown::factory(\rand(5, 10))->random($random)->create();
        });
    }
}
