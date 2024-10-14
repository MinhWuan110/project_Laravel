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
        Schema::create('catories', function (Blueprint $table) {
            $table->id(); // Tạo trường 'id' tự tăng
            $table->string('ten_tin_tuc'); // Tên danh mục
            $table->integer('trang_thai');
            $table->text('noi_dung')->nullable(); // Mô tả
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catories');
    }
};
