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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->string('ma_san_pham', 50)->primary();
            $table->string('ten_san_pham', 50);
            $table->decimal('gia', 10, 2);
            $table->string('image', 100);
            $table->string('ma_loai_sp', 50);
            $table->integer('so_luong');
            $table->string('ma_nha_cung_cap', 10);
            $table->integer('trang_thai');
            $table->foreign('ma_loai_sp')->references('ma_loai_sp')->on('loai_san_phams');
            $table->foreign('ma_nha_cung_cap')->references('ma_nha_cung_cap')->on('nha_cung_caps');
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
        Schema::dropIfExists('san_phams');
    }
};
