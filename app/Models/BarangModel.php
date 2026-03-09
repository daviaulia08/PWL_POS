<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';
    protected $fillable = ['barang_kode', 'barang_nama', 'kategori_id', 'harga_beli', 'harga_jual'];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}