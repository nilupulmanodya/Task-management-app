<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('transport');
            $table->integer('no_of_vehicles')->default(0);
            $table->decimal('toal_km')->default(0);
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
        Schema::dropIfExists('transports');
    }
}
