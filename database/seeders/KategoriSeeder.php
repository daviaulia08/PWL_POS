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
        $data = [
            ['kategori_id'=>1, 'kategori_kode'=>'ELK', 'kategori_nama'=>'Elektronik'],
            ['kategori_id'=>2, 'kategori_kode'=>'PRK', 'kategori_nama'=>'Perkakas'],
            ['kategori_id'=>3, 'kategori_kode'=>'PRT', 'kategori_nama'=>'Peralatan Rumah Tangga'],
            ['kategori_id'=>4, 'kategori_kode'=>'OTM', 'kategori_nama'=>'Otomotif'],
            ['kategori_id'=>5, 'kategori_kode'=>'FAS', 'kategori_nama'=>'Fashion'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
