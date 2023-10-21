<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsistances', function (Blueprint $table) {
            $table->id();
            $table->string('subsistance');
            $table->integer('no_of_persons')->default(0);
            $table->decimal('No_of_hours')->default(0);
            $table->decimal('unit_cost')->default(0);
            $table->decimal('total')->default(0);
            $table->integer('activity_id')->references('id')->on('activities');
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
        Schema::dropIfExists('subsistances');
    }
}
