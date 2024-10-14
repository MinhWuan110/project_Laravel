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
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->string('ma_hoa_don', 10)->primary();
            $table->string('ma_khach_hang', 10);
            $table->dateTime('ngay_lap');
            $table->decimal('tong_tien', 10, 2);
            $table->string('trang_thai', 20);
            $table->foreign('ma_khach_hang')->references('ma_khach_hang')->on('khach_hangs');
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
        Schema::dropIfExists('hoa_dons');
    }
};
