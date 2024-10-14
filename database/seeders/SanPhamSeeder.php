<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    public function run()
    {
        DB::table('san_phams')->insert([
            ['ma_san_pham' => 'SP001', 'ten_san_pham' => 'Sản phẩm 1', 'gia' => 100000, 'image' => 'https://res.cloudinary.com/dcfflbfsg/image/upload/v1728482822/dienthoai/phone-1.jpg', 'ma_loai_sp' => 'LOAI1', 'so_luong' => 50, 'ma_nha_cung_cap' => 'NCC001', 'trang_thai' => 1],
            ['ma_san_pham' => 'SP002', 'ten_san_pham' => 'Sản phẩm 2', 'gia' => 200000, 'image' => 'images/iphone-12-xanh-la-new-2-600x600.jpg', 'ma_loai_sp' => 'LOAI2', 'so_luong' => 30, 'ma_nha_cung_cap' => 'NCC002', 'trang_thai' => 1],
            ['ma_san_pham' => 'SP003', 'ten_san_pham' => 'Sản phẩm 3', 'gia' => 300000, 'image' => 'images/iphone-13-xanh-la-thumb-new-600x600.jpg', 'ma_loai_sp' => 'LOAI2', 'so_luong' => 30, 'ma_nha_cung_cap' => 'NCC002', 'trang_thai' => 1],
            ['ma_san_pham' => 'SP004', 'ten_san_pham' => 'Sản phẩm 4', 'gia' => 300000, 'image' => 'images/iphone-13-xanh-la-thumb-new-600x600.jpg', 'ma_loai_sp' => 'LOAI2', 'so_luong' => 30, 'ma_nha_cung_cap' => 'NCC002', 'trang_thai' => 1],
            ['ma_san_pham' => 'SP005', 'ten_san_pham' => 'Sản phẩm 5', 'gia' => 300000, 'image' => 'images/iphone-13-xanh-la-thumb-new-600x600.jpg', 'ma_loai_sp' => 'LOAI2', 'so_luong' => 30, 'ma_nha_cung_cap' => 'NCC002', 'trang_thai' => 1],
        ]);
    }
}
