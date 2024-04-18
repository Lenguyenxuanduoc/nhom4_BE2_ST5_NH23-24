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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars');
            $table->string('engine')->nullable();
            $table->string('horsepower')->nullable();
            $table->string('trim')->nullable();
            $table->string('torque')->nullable();
            $table->integer('cylinders')->nullable();
            $table->string('standard_mpg')->nullable();
            $table->string('transmission')->nullable();
            $table->string('transmission_type')->nullable();

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
        Schema::dropIfExists('performances');
    }
};
