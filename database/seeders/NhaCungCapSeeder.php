<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaCungCapSeeder extends Seeder
{
    public function run()
    {
        DB::table('nha_cung_caps')->insert([
            ['ma_nha_cung_cap' => 'NCC001', 'ten_nha_cung_cap' => 'Nhà cung cấp 1', 'email' => 'ncc1@example.com', 'so_dien_thoai' => '0123456789', 'dia_chi' => 'Địa chỉ 1'],
            ['ma_nha_cung_cap' => 'NCC002', 'ten_nha_cung_cap' => 'Nhà cung cấp 2', 'email' => 'ncc2@example.com', 'so_dien_thoai' => '0123456789', 'dia_chi' => 'Địa chỉ 2'],
        ]);
    }
}