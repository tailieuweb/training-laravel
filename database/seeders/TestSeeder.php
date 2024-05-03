<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_test')->insert([
            'test_name' => 1,
            'test_description' => 2,
            'test_number' => 3,
        ]);
        //
        DB::table('user_test')->insert([
            'test_name' => 1,
            'test_description' => 2,
            'test_number' => 3,
        ]);
        //
        DB::table('user_test')->insert([
            'test_name' => 1,
            'test_description' => 2,
            'test_number' => 3,
        ]);
        //
        DB::table('user_test')->insert([
            'test_name' => 1,
            'test_description' => 2,
            'test_number' => 3,
        ]);
        //
        DB::table('user_test')->insert([
            'test_name' => 1,
            'test_description' => 2,
            'test_number' => 3,
        ]);

    }
}
