<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $id = 1;

        for ($penjualan = 1; $penjualan <= 10; $penjualan ++) {
            for ($barang = 1; $barang <= 3; $barang ++) {
                $data[] = [
                    'detail_id' => $id++,
                    'penjualan_id' => $penjualan,
                    'barang_id' => rand(1,10),
                    'harga' => rand(10000, 50000),
                    'jumlah' => rand(1, 10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
