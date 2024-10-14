<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('catories')->insert([
              [
                'ten_tin_tuc' => 'Tin tức',
                'trang_thai' => 1,
                'noi_dung' => 'Cập nhật tin tức mới nhất từ khắp nơi.'
            ],
            [
                'ten_tin_tuc' => 'Giải trí',
                'trang_thai' => 1,
                'noi_dung' => 'Tin tức về phim ảnh, âm nhạc và sự kiện giải trí.'
            ],
            [
                'ten_tin_tuc' => 'Thể thao',
                'trang_thai' => 1,
                'noi_dung' => 'Tin tức và phân tích về các sự kiện thể thao lớn.'
            ],
            [
                'ten_tin_tuc' => 'Công nghệ',
                'trang_thai' => 1,
                'noi_dung' => 'Tin tức về công nghệ và đổi mới.'
            ],
            [
                'ten_tin_tuc' => 'Sức khỏe',
                'trang_thai' => 1,
                'noi_dung' => 'Thông tin về sức khỏe và lối sống lành mạnh.'
            ],
        ]);
    }
}
