<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhuongThucThanhToanSeeder extends Seeder
{
    public function run()
    {
        DB::table('phuong_thuc_thanh_toans')->insert([
            ['ma_phuong_thuc' => 1, 'ten_phuong_thuc' => 'Tiền mặt', 'mo_ta' => 'Thanh toán bằng tiền mặt', 'phi_giao_dich' => 0],
            ['ma_phuong_thuc' => 2, 'ten_phuong_thuc' => 'Thẻ tín dụng', 'mo_ta' => 'Thanh toán bằng thẻ tín dụng', 'phi_giao_dich' => 1000],
        ]);
    }
}