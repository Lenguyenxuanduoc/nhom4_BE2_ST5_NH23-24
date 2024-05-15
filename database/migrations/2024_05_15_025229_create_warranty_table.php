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
        Schema::create('warranty', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars');

             // Số km được bảo hành free 
            $table->string('free_maintenance_miles')->nullable();
            
            // Số dặm mà xe được bảo hành toàn diện. Đây là khoảng cách mà nhà sản xuất cam kết bảo hành toàn bộ xe mà không tính phí cho chủ sở hữu
            $table->string('full_warranty_miles')->nullable();

             // Số dặm mà hệ thống truyền động của xe được bảo hành
            $table->string('powertrain_warranty_miles')->nullable(); 

            // Số dặm mà dịch vụ hỗ trợ bên đường được cung cấp (kéo xe, thay lốp, cung cấp nhiên liệu khi bị hỏng trên đường)
            $table->string('roadside_warranty_miles')->nullable();

            // Số dặm mà bảo hành chống ăn mòn được áp dụng
            $table->string('corrosion_warranty_miles')->nullable();

            // Số tháng mà xe được bảo dưỡng miễn phí
            $table->string('free_maintenance_months')->nullable();

            // Số tháng mà xe được bảo hành toàn diện
            $table->string('full_warranty_months')->nullable();

            // Số tháng mà hệ thống truyền động của xe được bảo hành
            $table->string('powertrain_warranty_months')->nullable();

            // Số tháng mà dịch vụ hỗ trợ bên đường được cung cấp
            $table->string('roadside_warranty_months')->nullable();

            // Số tháng mà bảo hành chống ăn mòn được áp dụng
            $table->string('corrosion_warranty_months')->nullable();
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
        Schema::dropIfExists('warranty');
    }
};
