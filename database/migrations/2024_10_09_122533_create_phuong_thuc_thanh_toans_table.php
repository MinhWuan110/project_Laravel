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
        Schema::create('phuong_thuc_thanh_toans', function (Blueprint $table) {
            $table->integer('ma_phuong_thuc')->primary();
            $table->string('ten_phuong_thuc', 50);
            $table->text('mo_ta')->nullable();
            $table->decimal('phi_giao_dich', 10, 2);
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
        Schema::dropIfExists('phuong_thuc_thanh_toans');
    }
};
