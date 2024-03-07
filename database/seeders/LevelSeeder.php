<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $levels = [
            [
                'level_kode' => '001',
                'level_nama' => 'ADM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => '002',
                'level_nama' => 'MNG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => '003',
                'level_nama' => 'STF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('m_level')->insert($levels);
    }
}
