<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    public function run()
    {
        DB::table('khach_hangs')->insert([
            ['ma_khach_hang' => 'KH001', 'ho_ten' => 'Khách hàng 1', 'email' => 'kh1@example.com', 'so_dien_thoai' => '0123456789', 'dia_chi' => 'Địa chỉ 1'],
            ['ma_khach_hang' => 'KH002', 'ho_ten' => 'Khách hàng 2', 'email' => 'kh2@example.com', 'so_dien_thoai' => '0123456789', 'dia_chi' => 'Địa chỉ 2'],
        ]);
    }
}