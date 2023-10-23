<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_goals', function (Blueprint $table) {
            $table->id();
            $table->integer('goal_id')->referances('id')->on('goals');
            $table->integer('objective_id')->referances('id')->on('objectives');
            $table->integer('action_id')->referances('id')->on('actions');
            $table->integer('sub_action_id')->referances('id')->on('sub_actions');
            $table->integer('sub_activity_id')->referances('id')->on('sub_activities');
            $table->integer('activity_id')->referances('id')->on('activities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_goals');
    }
}
