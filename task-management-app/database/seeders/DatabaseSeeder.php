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
        $this->call(GoalsTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(ObjectivesTableSeeder::class);
        $this->call(StrategiesTableSeeder::class);
        $this->call(SubActionsTableSeeder::class);
        $this->call(SubActivityTableSeeder::class);
        $this->call(UserSeder::class);

    }
}
