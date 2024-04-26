<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('favorities')->insert([
            'favorite_name' => 'Thể thao',
            'favorite_description' => 'Thích câu lạc bộ Real, Barca, MU, ...',
        ]);

        DB::table('favorities')->insert([
            'favorite_name' => 'Du lịch',
            'favorite_description' => 'Tôi yêu Việt Nam, tối muốn đi du lịch khắp mọi miền đất nước, ...',
        ]);

        DB::table('favorities')->insert([
            'favorite_name' => 'Xem phim',
            'favorite_description' => 'Tôi rất thích xem phim hoạt hình',
        ]);
    }
}
