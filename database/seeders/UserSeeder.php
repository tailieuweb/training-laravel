<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'phone' => '213456789',
            'avatar' => 'Capture.PNG',
            'mssv' => 'test'
        ]);

        for ($i = 1; $i < 100; $i++) {
            $user_name = 'test' . $i;
            DB::table('users')->insert([
                'name' => $user_name,
                'email' => $user_name . '@admin.com',
                'password' => Hash::make('123456'),
                'phone' => '213456789',
                'avatar' => 'Capture.PNG',
                'mssv' => $user_name
            ]);
        }


    }
}
