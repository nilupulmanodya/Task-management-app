<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Seeder;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goals = [
            ['name' => 'To achieve excellence in the quality of teaching and learning'],
            ['name' => 'Enhance the image of the university by enriching research culture'],
            ['name' => 'Improve Physical, Infra, Super Structures and Human Capital'],
            ['name' => 'To enhance the social responsibility and harmony for sustainable development'],
            
        ];

        foreach ($goals as $goal) {
            Goal::create($goal);
        }
    }
}
