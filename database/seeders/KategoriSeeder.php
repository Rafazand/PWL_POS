<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kategoris = [
            [
                'kategori_kode' => '001',
                'kategori_nama' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => '002',
                'kategori_nama' => 'Fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => '003',
                'kategori_nama' => 'Otomotif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => '004',
                'kategori_nama' => 'Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => '005',
                'kategori_nama' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('m_kategori')->insert($kategoris);
    }
}
