<?php

namespace Database\Seeders;

use App\Models\SubAction;
use Illuminate\Database\Seeder;

class SubActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = [
            ['name' => 'subaction 1', 'action_id' => null],
            ['name' => 'subaction 2', 'action_id' => null],

        ];


        foreach ($actions as $action) {
            SubAction::create($action);
        }
    }
}
