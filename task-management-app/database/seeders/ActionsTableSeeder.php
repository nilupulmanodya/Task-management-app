<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = [
            ['name' => 'action 1', 'objective_id' => null],
            ['name' => 'action 2', 'objective_id' => null],

        ];


        foreach ($actions as $action) {
            Action::create($action);
        }
    }
}
