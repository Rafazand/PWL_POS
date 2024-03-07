<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $barangs = [
            [
                'kategori_id' => 1,
                'barang_kode' => '001',
                'barang_nama' => 'Laptop ASUS',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => '002',
                'barang_nama' => 'Kemeja Pria',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => '003',
                'barang_nama' => 'Ban Mobil',
                'harga_beli' => 30000,
                'harga_jual' => 35000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => '004',
                'barang_nama' => 'Obat Flu',
                'harga_beli' => 40000,
                'harga_jual' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => '005',
                'barang_nama' => 'Kacang Almond',
                'harga_beli' => 50000,
                'harga_jual' => 55000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => '006',
                'barang_nama' => 'Printer Epson',
                'harga_beli' => 60000,
                'harga_jual' => 65000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => '007',
                'barang_nama' => 'Jaket Wanita',
                'harga_beli' => 70000,
                'harga_jual' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => '008',
                'barang_nama' => 'Oli Mobil',
                'harga_beli' => 80000,
                'harga_jual' => 85000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => '009',
                'barang_nama' => 'Paracetamol',
                'harga_beli' => 90000,
                'harga_jual' => 95000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => '010',
                'barang_nama' => 'Susu Formula',
                'harga_beli' => 100000,
                'harga_jual' => 105000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('m_barang')->insert($barangs);
    }
}
