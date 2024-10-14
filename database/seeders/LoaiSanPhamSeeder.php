<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_san_phams')->insert([
            ['ma_loai_sp' => 'LOAI1', 'ten_loai_san_pham' => 'Loại 1', 'mo_ta' => 'Mô tả loại 1'],
            ['ma_loai_sp' => 'LOAI2', 'ten_loai_san_pham' => 'Loại 2', 'mo_ta' => 'Mô tả loại 2'],
        ]);

    }
}
