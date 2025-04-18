<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('roles')->insert([
                [
                    'name' => 'admin',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);

        DB::table('roles')->insert([
            [
                'name' => 'manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('roles')->insert([
            [
                'name' => 'leader',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('roles')->insert([
            [
                'name' => 'member',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
