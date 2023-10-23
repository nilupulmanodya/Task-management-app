<?php

namespace Database\Seeders;

use App\Models\Strategy;
use Illuminate\Database\Seeder;

class StrategiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $strategies = [
            ['name' => 'Set up a mechanism to systematically review existing academic programs and develop new programs', 'objective_id' => 1],
            ['name' => 'Strengthening teaching and learning using different pedagogies', 'objective_id' => 2],
            ['name' => 'Strengthen student support services', 'objective_id' => 2],
            ['name' => 'Widen the scope of industrial exposure', 'objective_id' => 3],
            ['name' => 'Strengthen career planning and mentoring programs', 'objective_id' => 3],
            ['name' => 'Widen the access to funding opportunities for research', 'objective_id' => 4],
            ['name' => 'Improve the infrastructure facilities for research', 'objective_id' => 4],
            ['name' => 'Facilitate collaborative research', 'objective_id' => 5],
            ['name' => 'Organizing research symposia', 'objective_id' => 6],
            ['name' => 'Publication of research journals', 'objective_id' => 6],
            ['name' => 'Awarding and Rewarding systems for encouraging researchers', 'objective_id' => 7],
            ['name' => 'Introduce a Physical Development Plan for the University', 'objective_id' => 8],
            ['name' => 'Enhance the physical facilities to improve the quality of the teaching and learning environment', 'objective_id' => 8],
            ['name' => 'Facilitate professional development of staff members', 'objective_id' => 9],
            ['name' => 'Develop service delivery mechanism for the wider community', 'objective_id' => 10],
        ];


        foreach ($strategies as $strategy) {
            Strategy::create($strategy);
        }


    }
}
