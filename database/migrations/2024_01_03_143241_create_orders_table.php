<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('cus_name', 100);
            $table->string('phone', 20);
            $table->string('address', 20);
            $table->string('add_info', 20);
            $table->decimal('price', 10, 2);
            $table->string('status'); 
            $table->timestamps(); // Thêm cột created_at và updated_at

            // Khóa ngoại: user_id tham chiếu đến cột id trong bảng users
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
