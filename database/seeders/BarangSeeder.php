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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MNM-001',
                'barang_nama' => 'Teh Botol',
                'harga_jual' => 5000,
                'harga_beli' => 4000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MNM-002',
                'barang_nama' => 'Aqua',
                'harga_jual' => 3000,
                'harga_beli' => 2000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MKN-001',
                'barang_nama' => 'Nasi Goreng',
                'harga_jual' => 15000,
                'harga_beli' => 10000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MKN-002',
                'barang_nama' => 'Mie Goreng',
                'harga_jual' => 10000,
                'harga_beli' => 8000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SNC-001',
                'barang_nama' => 'Chitato',
                'harga_jual' => 5000,
                'harga_beli' => 4000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'SNC-002',
                'barang_nama' => 'Taro',
                'harga_jual' => 5000,
                'harga_beli' => 4000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'SBK-001',
                'barang_nama' => 'Gula',
                'harga_jual' => 10000,
                'harga_beli' => 8000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'SBK-002',
                'barang_nama' => 'Minyak Goreng',
                'harga_jual' => 15000,
                'harga_beli' => 12000,
                'created_at' => now(), 
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'ATK-001',
                'barang_nama' => 'Pensil',
                'harga_jual' => 2000,
                'harga_beli' => 1500,
                'created_at' => now(),
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'ATK-002',
                'barang_nama' => 'Penghapus',
                'harga_jual' => 1000,
                'harga_beli' => 800,
                'created_at' => now(),
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 5,
                'barang_kode' => 'ATK-003',
                'barang_nama' => 'Penggaris',
                'harga_jual' => 3000,
                'harga_beli' => 2000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 5,
                'barang_kode' => 'ATK-004',
                'barang_nama' => 'Buku Tulis',
                'harga_jual' => 5000,
                'harga_beli' => 4000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'ATK-005',
                'barang_nama' => 'Penggaris',
                'harga_jual' => 3000,
                'harga_beli' => 2000,
                'created_at' => now(),
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
