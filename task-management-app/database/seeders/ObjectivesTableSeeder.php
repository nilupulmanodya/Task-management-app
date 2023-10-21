<?php

namespace Database\Seeders;

use App\Models\Objective;
use Illuminate\Database\Seeder;

class ObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objectives = [
            ['name' => 'obj 1', 'goal_id' => null],
            ['name' => 'obj 2', 'goal_id' => null],

        ];


        foreach ($objectives as $objective) {
            Objective::create($objective);
        }
    }
}
