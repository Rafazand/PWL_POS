<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'level_id' => 1, // Sesuaikan dengan level_id yang sesuai
                'username' => 'admin',
                'nama' => 'Admin',
                'password' => bcrypt('password1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2, // Sesuaikan dengan level_id yang sesuai
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => bcrypt('password2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 3, // Sesuaikan dengan level_id yang sesuai
                'username' => 'staff',
                'nama' => 'Staff',
                'password' => bcrypt('password3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('m_user')->insert($data);
    }
}
