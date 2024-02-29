<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 4,
                'pembeli' => 'Budi',
                'penjualan_kode' =>	1,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 4,
                'pembeli' => 'Susi',
                'penjualan_kode' =>	2,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 4,
                'pembeli' => 'Joni',
                'penjualan_kode' =>	3,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 4,
                'pembeli' => 'Toni',
                'penjualan_kode' =>	4,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 4,
                'pembeli' => 'Daniel',
                'penjualan_kode' =>	5,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 4,
                'pembeli' => 'Angel',
                'penjualan_kode' =>	6,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
