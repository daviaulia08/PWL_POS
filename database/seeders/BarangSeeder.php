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
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'barang_id' => $i,
                'kategori_id' => rand(1, 5),
                'barang_kode' => 'BRG' .$i,
                'barang_nama' => 'Barang ' .$i,
                'harga_beli' => rand(5000, 200000),
                'harga_jual' => rand(10000, 250000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
