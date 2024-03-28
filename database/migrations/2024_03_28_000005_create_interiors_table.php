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
        Schema::create('interiors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars');
            $table->integer('seating_capacity');
            $table->string('cargo_volume');
            $table->string('front_headroom');
            $table->string('rear_headroom');
            $table->string('front_legroom');
            $table->string('rear_legroom');
            $table->string('front_shoulder_room');
            $table->string('rear_shoulder_room');
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
        Schema::dropIfExists('interiors');
    }
};
