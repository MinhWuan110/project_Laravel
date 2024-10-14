<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{
    public function run()
    {
        DB::table('hoa_dons')->insert([
            ['ma_hoa_don' => 'HD001', 'ma_khach_hang' => 'KH001', 'ngay_lap' => now(), 'tong_tien' => 300000, 'trang_thai' => 'Đã thanh toán'],
            ['ma_hoa_don' => 'HD002', 'ma_khach_hang' => 'KH002', 'ngay_lap' => now(), 'tong_tien' => 500000, 'trang_thai' => 'Chưa thanh toán'],
        ]);
    }
}