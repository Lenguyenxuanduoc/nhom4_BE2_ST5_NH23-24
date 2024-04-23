<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weights_capacities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars');
            $table->string('fuel_capacity')->nullable();
            $table->string('cargo_capacity')->nullable();
            $table->string('curb_weight')->nullable();
            // $table->string('towing_capacity');
            // $table->string('gvwr');
            // $table->string('payload_capacity');
            // $table->string('tonnage');
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
        Schema::dropIfExists('weights_capacities');
    }
};
