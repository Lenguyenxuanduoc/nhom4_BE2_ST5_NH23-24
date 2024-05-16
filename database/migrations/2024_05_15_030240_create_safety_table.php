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
        Schema::create('safety', function (Blueprint $table) {
            $table->id();
            $table->string('car_id')->constrained('cars');

            // Thông tin về danh hiệu "Best Pick" của IIHS. Một chiếc xe được đánh giá cao bởi IIHS có thể nhận danh hiệu này.
            $table->string('IIHS_best_pick')->nullable();

            // Chỉ số này lưu trữ kết quả đánh giá của bài kiểm tra va chạm phía trước với 
            // diện tích nhỏ (front small overlap) của IIHS, mô phỏng tình huống xe va chạm vào góc trước
            $table->string('IIHS_front_small_overlap')->nullable();

            // Kết quả đánh giá của bài kiểm tra va chạm phía sau (rear crash) của IIHS
            $table->string('IIHS_rear_crash')->nullable();

            // Kết quả đánh giá của bài kiểm tra va chạm phía trước cho vị trí người lái (front driver) của IIHS
            $table->string('IIHS_rating_front_driver')->nullable();

            // Kết quả đánh giá của bài kiểm tra va chạm phía trước từ bên hông (front side) của IIHS
            $table->string('IIHS_rating_front_side')->nullable();

            // Kết quả đánh giá của bài kiểm tra va chạm phía sau từ bên hông (rear side) của IIHS
            $table->string('IIHS_rating_rear_side')->nullable();

            // Kết quả đánh giá của bài kiểm tra va chạm phía trước với diện tích trung bình (front moderate overlap) của IIHS
            $table->string('IIHS_front_moderate_overlap')->nullable();

            // Kết quả đánh giá tổng thể của bài kiểm tra va chạm bên hông (overall side crash) của IIHS
            $table->string('IIHS_overall_side_crash')->nullable();

            // Kết quả đánh giá về độ bền của mái xe (roof strength) trong trường hợp lật xe của IIHS
            $table->string('IIHS_roof_strength')->nullable();

            // Kết quả đánh giá của NHTSA về an toàn cho hành khách phía trước (front passenger)
            $table->string('NHTSA_rating_front_passenger')->nullable();

            // Kết quả đánh giá tổng thể của NHTSA về an toàn của xe
            $table->string('NHTSA_rating_overall')->nullable();

            // Kết quả đánh giá của NHTSA về khả năng chống lật (rollover) của xe
            $table->string('NHTSA_rating_rollover')->nullable();
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
        Schema::dropIfExists('safety');
    }
};
