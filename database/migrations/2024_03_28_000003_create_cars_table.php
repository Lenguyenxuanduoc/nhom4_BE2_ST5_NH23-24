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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('brand_id')->constrained('brands');
            $table->foreignId('category_id')->constrained('categories');
            $table->double('msrp')->nullable(); // MSRP (Giá bán lẻ đề xuất của nhà sản xuất)
            $table->double('fair_market_price')->nullable(); // Fair Market Price (Giá thị trường hợp lý) 
            $table->text('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('producing_year');
            $table->json('images')->nullable();
            $table->string('avatar')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('cars');
    }
};
