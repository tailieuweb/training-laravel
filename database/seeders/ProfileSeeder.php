<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_profile')->insert([
            'user_id' => 1,
            'first_name' => 'System',
            'last_name' => 'Management',
            'sex' => 0, //O: male, 1: female, 2: other
            'phone' => '213456789',
            'address' => 'The official instagram of the City of Orem'
        ]);


        DB::table('user_profile')->insert([
            'user_id' => 2,
            'first_name' => 'Test',
            'last_name' => 'Test',
            'sex' => 0, //O: male, 1: female, 2: other
            'phone' => '213456789',
            'address' => 'The official instagram of the City of Orem'
        ]);

    }
}
