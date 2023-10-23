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
            ['name' => 'To continuously improve the quality and relevance of academic programs', 'goal_id' => 1],
            ['name' => 'To develop conducive environment for teaching and learning', 'goal_id' => 1],
            ['name' => 'To increase opportunities for practical exposure in relevant industries', 'goal_id' => 1],
            ['name' => 'To develop a conducive environment for research', 'goal_id' => 2],
            ['name' => 'To encourage collaborative research', 'goal_id' => 2],
            ['name' => 'To widen the research outcome disseminating channels', 'goal_id' => 2],
            ['name' => 'To recognize and award the high quality research of university community', 'goal_id' => 2],
            ['name' => 'To develop Physical, Infra, and super structures facilities', 'goal_id' => 3],
            ['name' => 'Strengthen Human Resources', 'goal_id' => 3],
            ['name' => 'To promote harmony among the university community and the wider community', 'goal_id' => 4],
        ];


        foreach ($objectives as $objective) {
            Objective::create($objective);
        }
    }
}
