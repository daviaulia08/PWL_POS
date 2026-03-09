<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_kode' => 'SUP001', 'supplier_nama' => 'Supplier Satu', 'supplier_alamat' => 'Jl. Supplier No. 1, Malang'],
            ['supplier_kode' => 'SUP002', 'supplier_nama' => 'Supplier Dua', 'supplier_alamat' => 'Jl. Supplier No. 2, Malang'],
            ['supplier_kode' => 'SUP003', 'supplier_nama' => 'Supplier Tiga', 'supplier_alamat' => 'Jl. Supplier No. 3, Malang'],
            ['supplier_kode' => 'SUP004', 'supplier_nama' => 'Supplier Empat', 'supplier_alamat' => 'Jl. Supplier No. 4, Malang'],
            ['supplier_kode' => 'SUP005', 'supplier_nama' => 'Supplier Lima', 'supplier_alamat' => 'Jl. Supplier No. 5, Malang'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}