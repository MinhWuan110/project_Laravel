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
        Schema::create('chi_tiet_hoa_dons', function (Blueprint $table) {
            $table->string('ma_chi_tiet_hoa_don', 10)->primary();
            $table->string('ma_hoa_don', 10);
            $table->string('ma_san_pham', 50);
            $table->integer('so_luong');
            $table->decimal('don_gia', 10, 2);
            $table->foreign('ma_hoa_don')->references('ma_hoa_don')->on('hoa_dons');
            $table->foreign('ma_san_pham')->references('ma_san_pham')->on('san_phams');
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
        Schema::dropIfExists('chi_tiet_hoa_dons');
    }
};
