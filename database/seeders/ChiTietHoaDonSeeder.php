<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietHoaDonSeeder extends Seeder
{
    public function run()
    {
        DB::table('chi_tiet_hoa_dons')->insert([
            ['ma_chi_tiet_hoa_don' => 'CTHD001', 'ma_hoa_don' => 'HD001', 'ma_san_pham' => 'SP001', 'so_luong' => 2, 'don_gia' => 100000],
            ['ma_chi_tiet_hoa_don' => 'CTHD002', 'ma_hoa_don' => 'HD002', 'ma_san_pham' => 'SP002', 'so_luong' => 1, 'don_gia' => 200000],
        ]);
    }
}