<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LoaiSanPhamSeeder::class,
            NhaCungCapSeeder::class,
            SanPhamSeeder::class,
            KhachHangSeeder::class,
            HoaDonSeeder::class,
            ChiTietHoaDonSeeder::class,
            PhuongThucThanhToanSeeder::class,
            CatoriesSeeder::class,
        ]);
    }
}
